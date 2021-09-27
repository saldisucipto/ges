require('./bootstrap');

require('alpinejs');
import ClassicEditor from '@ckeditor/ckeditor5-build-classic/build/ckeditor';

for (let i = 1; i <= 10; i++) {
    var ready = (callback) => {
        if (document.readyState != "loading") callback();
        else document.addEventListener("DOMContentLoaded", callback);
    }
    ready(() => {
        ClassicEditor
            .create(document.querySelector('.wysiwyg' + [i]))
            .catch(error => {
                console.log(`error`, error)
            });
    });
}
var ready = (callback) => {
    if (document.readyState != "loading") callback();
    else document.addEventListener("DOMContentLoaded", callback);
}
ready(() => {
    ClassicEditor
        .create(document.querySelector('.wysiwyg'))
        .catch(error => {
            console.log(`error`, error)
        });
});

var ready = (callback) => {
    if (document.readyState != "loading") callback();
    else document.addEventListener("DOMContentLoaded", callback);
}
ready(() => {
    ClassicEditor
        .create(document.querySelector('.wysiwygDeco'))
        .catch(error => {
            console.log(`error`, error)
        });
});
