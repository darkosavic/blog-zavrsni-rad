<form action="{{$post->getSendCommentUrl()}}" class="commenting-form" method="post">
    @csrf
    <div class="row">
        <div class="form-group col-md-6">
            <input type="text" 
                   name="username" 
                   id="username" 
                   value="{{old('username')}}"
                   placeholder="Name" 
                   class="form-control">
        </div>
        <div class="form-group col-md-6">
            <input type="email"
                   name="email"
                   id="useremail"
                   value="{{old('email')}}"
                   placeholder="Email Address (will not be published)"
                   class="form-control">
        </div>
        <div class="form-group col-md-12">
            <textarea name="usercomment"
                      id="usercomment"
                      value="{{old('usercomment')}}"
                      placeholder="Type your comment"
                class="form-control">
                          
            </textarea>
        </div>
        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-secondary">Submit Comment</button>
        </div>
    </div>
</form>

