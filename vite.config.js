import { defineConfig } from 'vite'
import usePHP from 'vite-plugin-php'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
  plugins: [usePHP({
    entry: ['index.php', 'login.php'],
  }), tailwindcss()],
})
