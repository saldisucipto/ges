require('./bootstrap');

require('alpinejs');
import ClassicEditor from '@ckeditor/ckeditor5-build-classic/build/ckeditor';

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

