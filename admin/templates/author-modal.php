
<!--
 * Created by PhpStorm.
 * User: Hoc_Anms
 * Date: 8/31/2018
 * Time: 1:16 PM
 */-->


<!-- Modal -->
<div class="modal fade" id="form_author" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Authors</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="author-form" onsubmit="return false">
                    <div class="form-group">
                        <label>Authors Name</label>
                        <input type="text" class="form-control" name="author_name" id="author_name"  placeholder="Enter Author name">
                        <small id="author_error" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>