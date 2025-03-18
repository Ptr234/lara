<script>
function sanitizeInput(input) {
    return input.replace(/[&<>"'/]/g, function(char) {
        return {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#39;',
            "/": '&#x2F;'
        }[char];
    });
}
</script>
