<main class="col-lg-8"> 
    <div class="container">
        <form action="{{route('front.contact.sendMessage')}}" method="post" class="commenting-form" name="email_form">
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <input
                        name="your_name"
                        type="text" 
                        value="{{old('your_name')}}"
                        type="text" 
                        placeholder="Your Name" 
                        class="form-control @if($errors->has('your_name')) is-invalid @endif">
                    @include('front._layout.partials.form_errors', ['fieldName' => 'your_name'])
                </div>
                <div class="form-group col-md-6">
                    <input 
                        name="your_email"
                        type="text" 
                        value="{{old('your_email')}}"
                        type="email" 
                        placeholder="Email Address (will not be published)" 
                        class="form-control @if($errors->has('your_email')) is-invalid @endif">
                    @include('front._layout.partials.form_errors', ['fieldName' => 'your_email'])
                </div>
                <div class="form-group col-md-12">
                    <textarea 
                        name="your_message"
                        type="text"
                        placeholder="Type your message" 
                        class="form-control @if($errors->has('your_message')) is-invalid @endif"
                        rows="20"
                        >{{old('your_message')}}</textarea>
                    @include('front._layout.partials.form_errors', ['fieldName' => 'your_message'])
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-secondary">Submit Your Message</button>
                </div>
            </div>
        </form>
    </div>
</main>