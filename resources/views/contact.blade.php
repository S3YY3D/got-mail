<!DOCTYPE html>
<html>
<head>
    <title>فرم</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h1>لطفا فرم زیر را تکمیل کنید</h1>
    <form name="contact_form" id="contact_form" method="post" action="{{ route('store_form') }}">
        @csrf
        <label for="first_name">نام:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>
        
        <label for="last_name">نام خانوادگی:</label>
        <input type="text" id="last_name" name="last_name" ><br><br>
        
        <label for="email">ایمیل:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="phone">شماره همراه:</label>
        <input type="tel" id="phone" name="phone" ><br><br>

        <button type="submit" class="btn btn-primary">ارسال</button>
    </form>
</body>
</html>