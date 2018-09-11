<?php
/**
 * Created by PhpStorm.
 * User: Hoc_Anms
 * Date: 9/10/2018
 * Time: 9:06 PM
 */
?>
<div class="modal fade" id="form_book" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit this book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="update_book_form" onsubmit="return false">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="hidden" name="b_id" id="b_id" value="" />
                            <label>Date</label>
                            <input type="text" class="form-control" name="added_date" id="added_date" value="<?php echo date("Y-m-d"); ?>" required/>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Book Name</label>
                            <input type="text" class="form-control" name="update_book" id="update_book" placeholder="Enter Book Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" id="select_cat" name="select_cat" required/>



                        </select>
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <select class="form-control" id="select_author" name="select_author" required/>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Update Book</button>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
