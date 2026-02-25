 <div class="modal fade" id="createContentModal" tabindex="-1">
     <div class="modal-dialog modal-lg modal-dialog-centered">
         <div class="modal-content">

             <div class="modal-header">
                 <h5>Create New Content</h5>
                 <button class="btn-close" data-bs-dismiss="modal"></button>
             </div>

             <div class="modal-body">

                 <div class="mb-3">
                     <label class="form-label">Content Type</label>
                     <select class="form-select">
                         <option>Broadcast</option>
                         <option>Post</option>
                     </select>
                 </div>

                 <div class="mb-3">
                     <label class="form-label">Title</label>
                     <input type="text" class="form-control">
                 </div>

                 <div class="mb-3">
                     <label class="form-label">Content</label>
                     <textarea class="form-control" rows="4"></textarea>
                 </div>

                 <div class="mb-3">
                     <label class="form-label">Upload Image (Optional)</label>
                     <input type="file" class="form-control">
                 </div>

                 <div class="mb-3">
                     <label class="form-label">Status</label>
                     <select class="form-select">
                         <option>Draft</option>
                         <option>Publish</option>
                     </select>
                 </div>

             </div>

             <div class="modal-footer">
                 <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                 <button class="btn btn-success">Save</button>
             </div>

         </div>
     </div>
 </div>