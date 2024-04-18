function toggleMode() {
    var body = document.body;
    
    // Check if the body has the class 'dark-mode'
    if (body.classList.contains('dark-mode')) {
        // If it does, remove 'dark-mode' and add 'light-mode'
        body.classList.remove('dark-mode');
        body.classList.add('light-mode');
    } else {
        // If it doesn't, remove 'light-mode' and add 'dark-mode'
        body.classList.remove('light-mode');
        body.classList.add('dark-mode');
    }
}
