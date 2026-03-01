<div class="tab-pane fade show active" id="broadcastTab">

    <div class="card shadow-sm">
        <div class="card-body">

            <div class="d-flex justify-content-between mb-3">
                <h6 class="mb-0">All Broadcasts</h6>
                <select class="form-select form-select-sm w-auto" onchange="loadAnnouncementList(this.value)">
                    <option value="undefined">All</option>
                    <option value="published">Published</option>
                    <option value="draft">Draft</option>
                    <option value="archived">Archived</option>
                </select>
            </div>

            <div class="list-group">
                <!-- DYNAMIC LIST -->
            </div>
        </div>
    </div>
</div>

<script>
    loadAnnouncementList();

    async function loadAnnouncementList(filter) {
        const list_group = document.querySelector(".list-group");
        try {

            const res = await fetch('./../../../api/AnnouncementController.php', {
                method: 'POST',
                body: new URLSearchParams({
                    action: 'load',
                    filter: filter,
                }),
            });

            if (!res.ok) throw new Error('Network response is not ok.');

            const data = await res.json();

            const announcements = data.map(data => {

                const status_colors = {
                    draft: 'secondary',
                    archived: 'warning',
                    published: 'success',
                }

                const status = data.status;
                const status_color = status_colors[status] || 'secondary';

                return `<div class="card border mb-2">
                    <div class="card-body d-flex justify-content-between align-items-start">

                        <div class="d-flex">

                            <div class="me-3">
                                <div class="rounded-circle ${data.theme_color}" style="width: 12px; height: 12px;"></div>
                            </div>

                            <div>
                                <h6 class="fw-bold mb-1">
                                    📢 ${data.title}!
                                    <small class="text-muted ms-4">${data.created_at}</small>
                                </h6>

                                <p class="my-2 text-muted small">  
                                        ${data.announcement_message}
                                </p>

                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-${status_color}">${data.status}</span>
                                    <small class="text-muted">Expires: ${data.expires_at}</small>
                                </div>
                            </div>
                        </div>

                        <div class="btn-group btn-group-sm">
                            <button class="btn text-primary" data-bs-toggle="modal" data-bs-target="#editBroadcastModal">
                                <i class="bi bi-pencil h5"></i>
                            </button>
                            <button class="btn text-warning" data-bs-toggle="modal" data-bs-target="#archiveBroadcastModal">
                                <i class="bi bi-archive h5"></i>
                            </button>
                            <button class="btn text-danger">
                                <i class="bi bi-trash h5"></i>
                            </button>
                        </div>

                    </div>
                </div>`;
            }).join('');

            list_group.innerHTML = announcements;

        } catch {

        } finally {

        }
    }
</script>