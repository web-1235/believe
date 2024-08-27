<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRIGHTENING-VITAMIN-C-FACE-SERUM</title>
    <link rel="shortcut icon" href="./assets/Believe-favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        
        .main-image {
            max-height: 500px;
            object-fit: cover; 
        }
        .thumbnail {
            width: 80px;
            cursor: pointer; 
            margin: 5px;
            border: 2px solid transparent;
        }
        .thumbnail.active {
            border-color: #000;
        }
        .rating {
            font-size: 1.5rem;
            color: #ffd700;
        }
        .rating .fa-star {
            margin-right: 5px;
        }
        .quantity-input {
            width: 70px; 
        }
        .bt-check {
            background-color: #410020;
            color: white;
            border: none;
            font-weight: bold;
            width: 100%;
        }
        .bt-check:hover {
            background-color: #880048;
        }
        .des h3 {
            border-bottom: 2px solid #110009;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .description {
            text-align: justify;
        }

        

    </style>
</head>
<body>
    <div class="container mt-4 py-5">
        <div class="row">
            <div class="col-md-6">
                <!-- Main Image -->
                <img src="./assets/BRIGHTENING-VITAMIN-C-FACE-SERUM.jpeg" class="img-fluid main-image" alt="Main Product Image">
                <!-- Thumbnail Images -->
                <div class="d-flex flex-wrap mt-3">
                    <img src="./assets/BRIGHTENING-VITAMIN-C-FACE-SERUM.jpeg" class="thumbnail active" data-large-src="./assets/BRIGHTENING-VITAMIN-C-FACE-SERUM.jpeg" alt="Thumbnail 1">
                    <img src="./assets/SERUM-NEW-1.jpg" class="thumbnail" data-large-src="./assets/SERUM-NEW-1.jpg" alt="Thumbnail 2">
                    <img src="./assets/SERUM-NEW-2.jpg" class="thumbnail" data-large-src="./assets/SERUM-NEW-2.jpg" alt="Thumbnail 3">
                    <img src="./assets/SERUM-NEW-3.jpg" class="thumbnail" data-large-src="./assets/SERUM-NEW-3.jpg" alt="Thumbnail 4">
                    <img src="./assets/SERUM-NEW-4.jpg" class="thumbnail" data-large-src="./assets/SERUM-NEW-4.jpg" alt="Thumbnail 5">
                    <img src="./assets/SERUM-NEW-5.jpg" class="thumbnail" data-large-src="./assets/SERUM-NEW-5.jpg" alt="Thumbnail 6">
                    <img src="./assets/SERUM-NEW-6.jpg" class="thumbnail" data-large-src="./assets/SERUM-NEW-6.jpg" alt="Thumbnail 7">
                    <img src="./assets/SERUM-NEW-7.jpg" class="thumbnail" data-large-src="./assets/SERUM-NEW-7.jpg" alt="Thumbnail 8">
                </div>
            </div>
            <div class="col-md-6 py-5">
                <h5 class="product-name display-5">BRIGHTENING-VITAMIN-C-FACE-SERUM</h5>
                <p class="lead text-muted mt-2 fs-8">Brightening | Vitamin C | Elixir | for Youthful | Skin</p>
                <div class="rating mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p class="prize mt-2">LKR 2400</p>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" id="quantity" class="form-control quantity-input" value="1" min="1">
                </div>
                
            </div>
        </div>
        <div class="des py-5">
            <h3 class="mt-4 mb-4 display-6">Product Description</h3>
            <p class="description text-muted">
            The Brightening Vitamin C Face Serum is a potent skincare solution designed to enhance your complexion and rejuvenate your skin. Infused with Vitamin C, a powerful antioxidant, this serum helps to brighten your skin tone, reduce the appearance of dark spots, and improve overall skin texture. The serum is also enriched with hyaluronic acid to keep your skin hydrated and plump. It’s ideal for those seeking a radiant and youthful glow, combating signs of aging and skin fatigue.
            </p> 

            
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script>
 document.addEventListener('DOMContentLoaded', function() {
    // Select the main image and all thumbnail images
    const mainImage = document.querySelector('.main-image');
    const thumbnails = document.querySelectorAll('.thumbnail');

    // Loop through each thumbnail
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            // Remove the 'active' class from all thumbnails
            thumbnails.forEach(img => img.classList.remove('active'));

            // Add the 'active' class to the clicked thumbnail
            this.classList.add('active');

            // Update the main image source to the clicked thumbnail's data-large-src attribute
            const newSrc = this.getAttribute('data-large-src');
            mainImage.src = newSrc;
        });
    });
 });
</script>
</html>
