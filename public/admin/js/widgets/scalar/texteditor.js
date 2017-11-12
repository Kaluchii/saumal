var texteditor = (function () {
    //Переменные по умолчанию, и внутренние переменные для работы
    var data = {};


    var Constr = function (options) {
        if (options === undefined) {
            return {error: true, msg: 'Невозможно создать виджет'};
        } else {
            var $this = this;

            this.elem      = options.elem;
            this.pos       = options.position;
            this.fieldName = $(this.elem).data('name');
            this.type      = $(this.elem).data('type');
            this.blockName = $(this.elem).data('block');
            this.id        = $(this.elem).data('id');

            this.editorObj = $(this.elem).summernote({
                height    : 200,
                lang      : 'ru-RU',
                codemirror: {
                    theme: 'monokai'
                },
                toolbar   : [
                    ['style', ['style', 'bold']],
                    ['insert', ['picture', 'link']],
                    ['paragraph', ['paragraph']],
                    ['mybutton', ['template']],
                    ['misc', ['fullscreen', 'codeview', 'cleaner']]
                ],
                template: {
                    path: '/admin/plugins/summernote/tpls', // path to your template folder

                    /*
                     * list of your templates
                     * key is the html file name (without .html extension)
                     * value is the label shown in the editor
                     */
                    list: {
                        'big':      'Больший размер текста',
                        'strong':   'Синий текст',
                        'l-img':    'Изображение слева',
                        'r-img':    'Изображение справа',
                        'f-img-t':  'Изображение (бол.)',
                        'f-img':    'Изображение с текстом (бол.)',
                        'f-img-sm': 'Изображение с текстом (мал.)'
                    }
                },
                cleaner:{
                    notTime: 2400, // Time to display Notifications.
                    action: 'button', // both|button|paste 'button' only cleans via toolbar button, 'paste' only clean when pasting content, both does both options.
                    newline: '<br>', // Summernote's default is to use '<p><br></p>'
                    notStyle: 'position:absolute;top:0;right:0', // Position of Notification
                    icon: '<i class="note-icon-eraser"></i> Очистка стилей',
                    keepHtml: true, // Remove all Html formats
                    keepOnlyTags: ['<p>', '<div>', '<br>', '<ul>', '<li>', '<big>', '<b>', '<strong>','<i>', '<a>', '<h1>', '<h2>', '<h3>', '<h4>', '<h5>', '<h6>', '<img>'], // If keepHtml is true, remove all tags except these
                    keepClasses: false, // Remove Classes
                    badTags: ['style', 'script', 'applet', 'embed', 'noframes', 'noscript', 'html'], // Remove full tags with contents
                    badAttributes: ['style', 'start', 'dir'] // Remove attributes from remaining tags
                },
                callbacks : {
                    onImageUpload: function (files, editor, welEditable) {
                        sendFile(files[0], editor, welEditable);
                    }
                }
            });
            function sendFile(file, editor, welEditable) {
                data = new FormData();
                data.append("image_file", file);
                data.append("entity_name", 'default_imageset');
                data.append("image_name", 'image_item');
                data.append("entity_id", '0');
                $.ajax({
                    data       : data,
                    type       : "POST",
                    url        : "/adm/newImage",
                    cache      : false,
                    contentType: false,
                    processData: false,
                    success    : function (data) {
                        $($this.elem).summernote('editor.insertImage', data.image);
                    }
                });
            }
            this.get = function () {
                obj = {
                    block: this.blockName,
                    id   : this.id,
                    key  : this.fieldName,
                    value: this.getField()
                };
                if (this.type != undefined) {
                    obj.type = this.type;
                }
                return obj;
            };

            this.getField = function () {
                return this.editorObj.summernote('code');
            };

            this.set = function (value) {
                $(this.elem).val(value);
            };

            $(this.elem).on('summernote.change', function () {
                eventManager.call('updateWidget', $this.pos);
            });
            this.destroy = function () {
                eventManager.call('removeData', this.get());
            }
        }
    };


    return Constr;

})();
