    @auth
    <!-- The Modal -->
    <div id="confirmModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Confirm your action</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                Are you sure?
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button id="confirmBtn" type="button" class="btn btn-danger float-left mr-4" data-dismiss="modal">Confirm</button>
                <button type="button" class="btn btn-primary float-right" data-dismiss="modal">Cancel</button>
            </div>
            </div>
        </div>
    </div>
    @endauth

    {{-- main script --}}
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

    {{-- bootstrap script --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>