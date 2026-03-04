 <div class="tab-pane fade" id="postsTab">
     <div class="row g-4" id="post_list_group">

         <!-- POST CARD -->
         <!-- POST CARD -->

     </div>
 </div>

 <script>
     loadPosts();

     async function loadPosts() { // LOAD LIST

         const post_list_group = document.getElementById("post_list_group");

         try {

             const res = await fetch('./../../../api/PostController.php', {
                 method: 'POST',
                 body: new URLSearchParams({
                     action: 'load',
                 }),
                 credentials: "same-origin",
             });

             if (!res.ok) throw new Error('Network response is not ok.');

             const data = await res.json();

             const posts = data.map(data => {



                 return ` <div class="col-md-6 col-lg-4">
             <div class="card border shadow-sm h-100 content-card">

                 <div class="card-body">

                     <!-- HEADER -->
                     <div class="d-flex align-items-center mb-2">
                         <div>
                             <h6 class="mb-0 fw-semibold">${data.post_title}</h6>
                             <small class="text-muted">
                                 By ${data.posted_by} • ${data.post_date}
                             </small>
                         </div>
                         <span class="badge bg-success ms-auto mb-3">${data.status}</span>
                     </div>

                     <!-- IMAGE -->
                     <img src="${data.image_src}"
                         class="card-img-top object-fit-cover rounded mb-2"
                         style="height:400px;">

                     <!-- CAPTION -->
                     <p class="text-muted small mb-2">
             ${data.post_caption}
                     </p>

                     <!-- STATS -->
                     <div class="d-flex justify-content-between pt-2 text-muted small">
                         <span class="ms-auto"><i class="bi bi-heart me-1"></i>67</span>
                     </div>

                 </div>

                 <!-- FOOTER ACTIONS -->
                 <div class="card-footer bg-white border-0 pt-0 pb-3">
                     <div class="d-flex justify-content-between">

                         <div class="btn-group btn-group-sm">
                             <button class="btn text-success" data-bs-toggle="modal" data-bs-target="#editPostModal"
                             onclick="getPostIfo(${data.post_id})">
                                 <i class="bi bi-pencil h5"></i>
                             </button>
                             <button class="btn text-primary">
                                 <i class="bi bi-eye h5"></i>
                             </button>
                             <button class="btn text-warning">
                                 <i class="bi bi-archive h5"></i>
                             </button>
                             <button class="btn text-danger">
                                 <i class="bi bi-trash h5"></i>
                             </button>
                         </div>

                         <div class="btn-group btn-group-sm">
                             <button class="btn text-secondary text-danger">
                                 <i class="bi bi-heart h5"></i>
                             </button>
                             <button class="btn text-secondary">
                                 <i class="bi bi-chat h5"></i>
                             </button>
                         </div>

                     </div>
                 </div>

             </div>
         </div>`;
             }).join('');

             post_list_group.innerHTML = posts;

         } catch {

         } finally {

         }
     }
 </script>