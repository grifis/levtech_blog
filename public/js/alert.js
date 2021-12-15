function alert_func(id_value) {
    const id_data = 'form_' + id_value;
    'use strict'
    const choice = window.confirm('本当に削除してもよろしいですか？');
    if (choice){
        document.getElementById(id_data).submit();
    }
}