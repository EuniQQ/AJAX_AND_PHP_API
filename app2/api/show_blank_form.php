<div class="modal" tabindex="-1" role="dialog" id="blankform">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">新增學生</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form >
       <p><label for=""></label><input type="text" name="name" id="name"></p>
       <p><label for=""></label><input type="text" name="classroom" id="classroom"></p>
       <p><label for=""></label><input type="text" name="birthday" id="birthday"></p>
       <p><label for=""></label><input type="text" name="num" id="num"></p>
        </form>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="add()">取消</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">新增</button>
      </div>
    </div>
  </div>
</div>