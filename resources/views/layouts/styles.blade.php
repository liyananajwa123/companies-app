    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    {{-- <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('assets') }}/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom/custom.css') }}">
    <style>
 .prize-container {
    text-align: center;
    margin-bottom: 20px;
}

.prize-image-wrapper {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
    border: 5px solid #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.prize-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.prize-label {
    margin-top: 10px;
    font-size: 1.25rem;
    font-weight: bold;
    color: #fff;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
}

.campaign-title {
    font-size: 2rem;
    font-weight: bold;
    color: #fff;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
    padding: 10px 20px;
    background: rgba(0, 0, 0, 0.5);
    border-radius: 10px;
}

@media (min-width: 576px) {
    .prize-image-wrapper {
        width: 200px;
        height: 200px;
    }
}

@media (min-width: 768px) {
    .prize-image-wrapper {
        width: 250px;
        height: 250px;
    }
}

@media (min-width: 992px) {
    .prize-image-wrapper {
        width: 300px;
        height: 300px;
    }
}

@media (min-width: 1200px) {
    .prize-image-wrapper {
        width: 350px;
        height: 350px;
    }
}


.lucky-draw-items ul {
    list-style: none; /* Remove default list styling */
    padding: 0; /* Remove default padding */
    margin: 0; /* Remove default margin */
    display: inline-block; /* Center the ul */
}

.lucky-draw-items li {
    font-size: 18px; /* Adjust font size */
    margin-bottom: 10px; /* Space between items */
    display: flex; /* Align items in a row */

}

.lucky-draw-items li i {
    color: red; /* Change icon color */
    margin-right: 10px; /* Space between icon and text */
}

.lucky-draw-items {
    display: flex; 
    flex-direction: column;
}
.center-content {
    display: flex;
    flex-direction: column;
    align-items: left;
    justify-content: left;
    text-align: left;
    width: 100%;
}


.floating-card {
    background-color: white;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
    margin: 20px;
    padding: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.floating-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2), 0 12px 40px rgba(0, 0, 0, 0.2);
}
form .form-group label {
    font-weight: bold;
    color: #333;
    display: block;
    margin-bottom: 5px;
}

form .form-group input {
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0;
    box-shadow: none;
    padding: 8px 12px;
    width: 100%;
    transition: border-bottom-color 0.3s;
}

form .form-group input:focus {
    outline: none;
    border-bottom-color: black;
}

form .form-group input[type="file"] {
    padding: 0;
}

form .form-group {
    margin-bottom: 20px;
}

form button[type="submit"]:hover {
    background-color: #c9302c;
}

</style>