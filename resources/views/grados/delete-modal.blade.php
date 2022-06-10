<!-- Button trigger modal -->

<span data-bs-toggle="modal" data-bs-target="#deleteModal">
    <a type="button" class="btn btn-danger mr-2 open-deleteModal" data-id="{{ $g->ID_GRADO }}" data-bs-toggle="tooltip"
        data-bs-placement="top" title="Eliminar">
        <i class="fa-solid fa-trash"></i>
        {{ $g->ID_GRADO }}
    </a>
</span>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Grado</h5>
                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-circle-xmark"></i>
                </a>
            </div>
            <div class="modal-body">
                ¿Seguro que desea eliminar el Grado?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="" method="post">
                    @method('delete')
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on("click", ".open-deleteModal", function() {
        let gradoID = $(this).data('id');
        $(".modal-body #gradoID").val(gradoID);
    });

    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var gradoID = button.data('gradoID');

        var modal = $(this)
        modal.find('#deleteForm').attr("action", "{{ url('/grados') }}" + "/" + gradoID)
        modal.find('#deleteForm input').val(gradoID)
    })
</script>
