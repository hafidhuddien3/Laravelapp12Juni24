import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    server: {
        port: 5173, // Specify the port you want to use
    },
    build: {
        outDir: "dist", // Specify the output directory
    },
    optimizeDeps: {
        include: ["normalize.css"], // Add any dependencies to include in the build
    },
    // Define the index page
    build: {
        rollupOptions: {
            input: {
                main: "index.html", // Specify the entry point
            },
        },
    },
});
