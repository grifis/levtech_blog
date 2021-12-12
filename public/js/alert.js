function test_func(e) {
    const id_data = 'form_' + '{{ $post->id}}'
    'use strict'
    const choice = window.confirm('aaa');
    if (choice){
        document.getElementById(id_data).submit();
    }
}