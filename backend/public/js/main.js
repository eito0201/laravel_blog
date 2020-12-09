(function() {
  'use strict';

  // 削除ボタンのリンクを取得
  var cmds = document.getElementsByClassName('del');
  var i;

  // 削除ボタンのリンクにクリック時のイベントを設定
  for (i = 0; i < cmds.length; i++) {
    cmds[i].addEventListener('click', function(e) {
      e.preventDefault;
      if (confirm('Are you sure?')) {
        document.getElementById('form_' + this.dataset.id).submit();
      }
    });
  }
})();