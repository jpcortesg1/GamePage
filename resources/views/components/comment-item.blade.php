<div>
  <div class="comment ps-2 my-5" style="border-left: 2px solid #fff">
    <div class="d-flex align-items-center">
      <div class="photo">
        <img class="rounded-circle"
          src="https://images.pexels.com/photos/11438375/pexels-photo-11438375.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
          alt="" style="width: 3rem; height: 3rem; object-fit: cover" />
      </div>
      <div class="name mx-3 fs-5">Jane</div>
      <span class="date"> <i class="fa-solid fa-calendar"></i>{{ $comment->getCreateAt() }}</span>
    </div>

    <div class="center">
      {{ $comment->getComment() }}
    </div>

    <div class="bottom ms-3">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-outline-light mt-2" data-bs-toggle="modal"
        data-bs-target="#exampleModal{{ $comment->getId() }}">
        Response
        <i class="fa-solid fa-reply"></i>
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal{{ $comment->getId() }}" tabindex="-1"
        aria-labelledby="exampleModalLabel{{ $comment->getId() }}" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-dark text-light">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel{{ $comment->getId() }}">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="form" action="{{ route('comment.store', $comment->getIdGame()) }}" method="POST">
                @csrf
                @method('POST')
                <div class="form-floating text-light">

                  <textarea class="form-control bg-dark text-light" placeholder="Leave a comment here" id="floatingTextarea"
                    name="comment"></textarea>
                  <label for="floatingTextarea" class="text-light">Response</label>
                  @error('comment')
                    <div class="alert alert-danger mt-2">The field must be full</div>
                  @enderror

                  <div class="input-group mt-3 visually-hidden">
                    <input type="text" name="idComment" class="form-control bg-dark text-light"
                      placeholder="Recipient's username" aria-label="Recipient's username"
                      aria-describedby="basic-addon2" value="{{ $comment->getId() }}">
                  </div>

                  <button type="submit" class="btn btn-outline-light mt-2">Create</button>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="responses">

      @foreach ($comment->comments as $subcomment)
        <x-comment-item :comment="$subcomment" />
      @endforeach

    </div>
  </div>
</div>
