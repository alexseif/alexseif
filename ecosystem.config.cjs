module.exports = {
  apps: [
    {
      name: 'alexseif-frontend',
      cwd: '/var/www/alexseif.com/frontend',
      script: '.standalone/server.js',
      instances: 1,
      autorestart: true,
      watch: false,
      max_memory_restart: '500M',
      env: {
        NODE_ENV: 'production',
        PORT: 3000,
        HOSTNAME: '127.0.0.1',
      },
    },
  ],
};
