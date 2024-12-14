$( document ).ready(function() {
    if(theme) {
        let currTheme = $('body').hasClass('bg-theme-dark'); 
        if (currTheme == theme) {
            return;
        }
        if (theme == 'dark') {
            $('body').addClass('bg-theme-dark');
            $('#toggleDarkMode').prop('checked', true);
        } else {
            $('body').removeClass('bg-theme-dark');
            $('#toggleDarkMode').prop('checked', false);
        }
    }
});

$('#btnShowPassword').click(function(e){
    const pwd = $('#txtLoginPwd');
    if (e.target.innerHTML === 'Show') {
        pwd.attr('type', 'text');
        e.target.innerHTML = 'Hide'
    } else {
        pwd.attr('type', 'password');
        e.target.innerHTML = 'Show';
    }
});

$('#toggleDarkMode').change(function(){
    $('body').toggleClass('bg-theme-dark');
    if($('body').hasClass('bg-theme-dark')) {
        localStorage.setItem('theme', 'dark');
    } else {
        localStorage.setItem('theme', 'light');
    }
});


function loadTinyMCE () {
    tinymce.init({
        promotion: false,
        menubar: false,
        branding: false,
        elementpath: true,
        skin: localStorage.getItem("theme") === 'dark' ? 'oxide-dark' : 'oxide',
        content_css: localStorage.getItem("theme") === 'dark' ? 'dark' : 'default',
        selector: 'textarea#payloadSaran', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | table'
    });
}

$('#btnDarkMode').click(function(){
    setTimeout(() => {
        tinymce.remove('textarea#payloadSaran');
        loadTinyMCE();
    }, "1");
});

