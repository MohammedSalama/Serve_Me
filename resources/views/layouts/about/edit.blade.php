<!-- Edit about -->
<div class="modal fade" id="Editabout{{$about->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Edit About </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('about.update',$about->id)}}" method="post" autocomplete="off">
                    @method('POST')
                    @csrf
                        {{--Input hidden id--}}
                    <input type="hidden" name="id" value="{{$about->id}}"/>

                    <div class="row">

                        <div class="col">
                            <label> Title </label>
                            <input type="text" name="title"  value="{{$about->title}}" class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="5">
                               {{$about->description}}
                           </textarea>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Confirm</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

