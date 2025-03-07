<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <link href="http://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card show-sm">
                    <div class="card-header text-center">
                        <h3>URL Shortener</h3>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" id="shortner-form">
                            <div class="col-md-10">
                                <input type="url" class="form-control" name="original_url" id="original_url" placeholder="https://example.com" required>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary mb-3">Shorten URL</button>
                            </div>
                        </form>
                        <div id="result" style="display:none;">
                            <b>Shortened URL:</b>
                            <a href="#" target="_blank" id="short_url" class="btn btn-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('shortner-form').addEventListener('submit', function(event){ 
        event.preventDefault();

        const originalUrl = document.getElementById('original_url').value; 
        fetch('{{route("url.short")}}', { 
            method: 'POST',
            headers: {
                'Content-Type' : 'application/json',
                'Accept' : 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ original_url: originalUrl })
        })
            .then(response => response.json())
            .then(data => { 
                const shortUrlElement =document.getElementById('short_url');
                shortUrlElement.href = data.short_url;
                shortUrlElement.textContent = data.short_url;
                document.getElementById('result').style.display = 'block';

            })
            .catch(error => console.error('Error:', error));
    });

</script>