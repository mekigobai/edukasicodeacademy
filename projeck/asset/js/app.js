
// app.js
document.addEventListener('alpine:init', () => {
    Alpine.data('hamburgerMenu', () => ({
        open: false,
        toggle() {
            this.open = !this.open;
        },
        close() {
            this.open = false;
        }
    }));
});