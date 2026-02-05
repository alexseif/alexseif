#!/bin/bash
set -e

echo "📝 Pushing code to Git..."
git add .
git commit -m "Deployment: $(date)"
git push origin master

echo "🛰️ Triggering Server-Side Build..."
ssh devops@alexseif.com "cd /var/www/alexseif.com && ./deployer.sh"