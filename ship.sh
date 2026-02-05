#!/bin/bash
set -e

echo "🎨 Building Next.js locally..."
cd frontend
npm run build

echo "📦 Compressing artifacts..."
# Archive .next and public together
tar -czf next_build.tar.gz .next public
cd ..

echo "📝 Pushing logic to Git..."
git add .
git commit -m "Deployment Sync: $(date)"
git push origin master

echo "🚢 Shipping archive to server..."
scp -v frontend/next_build.tar.gz devops@alexseif.com:/var/www/alexseif.com/frontend/

echo "🛰️  Triggering Server Deployer..."
ssh devops@alexseif.com "cd /var/www/alexseif.com && ./deployer.sh"

# Clean up local archive
rm frontend/next_build.tar.gz
echo "✨ Ship complete."