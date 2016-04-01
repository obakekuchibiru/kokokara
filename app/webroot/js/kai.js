/**
 * Created by kaishunsuke on 2015/03/09.
 */

function deleteEvent(id){
   	$.ajax({
      type: 'post',
      dataType: 'html',
      url: './deleteevent',
      data: { id : id },
      'success': function(data) {
        var list = null;
        console.log(data);
        data=JSON.parse(data);

        //成功時
        if(data.status==1) {
          // 成功時の処理。無事Userからリストを取得する。
          alert(data.title+"を削除しました");
          $("#event"+id).remove();
        } else {
          // 失敗時の処理。失敗したことを伝える。
          alert("処理中にエラーがありました");
        }
      },
      'error': function() {
        alert("削除失敗")
      }
    });

}



