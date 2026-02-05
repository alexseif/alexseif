#!/bin/bash

# 1. Build locally (Uses your ThinkPad's CPU/RAM, not the server's)
echo "🎨 Building Next.js locally..."
cd frontend
export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"
nvm use 20
npm run build
cd ..

# 2. Push code to Git (So the server can pull the Symfony changes)
echo "📝 Pushing logic to Git..."
git add .
git commit -m "Deployment Sync: $(date)"
git push origin master

# 3. Trigger Server-side Deployer (Symfony & PM2)
echo "🛰️  Triggering Server Deployer..."
ssh devops@alexseif.com "cd /var/www/alexseif.com && ./deployer.sh"

# 4. Sync the heavy Frontend Build folders
echo "🚢 Shipping .next artifacts (Rsync)..."
rsync -avzP --delete \
    ./frontend/.next \
    ./frontend/public \
    devops@alexseif.com:/var/www/alexseif.com/frontend/

echo "✨ Site is live and decoupled."