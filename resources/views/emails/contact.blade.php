<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #088c8a; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background-color: #f9f9f9; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #088c8a; }
        .value { margin-top: 5px; }
        .footer { text-align: center; padding: 20px; color: #666; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Form Submission</h1>
        </div>
        
        <div class="content">
            <p><strong>You have received a new contact form submission from your website.</strong></p>
            
            <div class="field">
                <div class="label">Name:</div>
                <div class="value">{{ $name }}</div>
            </div>
            
            @if($company)
            <div class="field">
                <div class="label">Company:</div>
                <div class="value">{{ $company }}</div>
            </div>
            @endif
            
            <div class="field">
                <div class="label">Email:</div>
                <div class="value">{{ $email }}</div>
            </div>
            
            <div class="field">
                <div class="label">Phone:</div>
                <div class="value">{{ $phone }}</div>
            </div>
            
            <div class="field">
                <div class="label">Delivery Address:</div>
                <div class="value">{{ $delivery_address }}</div>
            </div>
            
            <div class="field">
                <div class="label">Container Need:</div>
                <div class="value">{{ $container_need }}</div>
            </div>
            
            <div class="field">
                <div class="label">Duration:</div>
                <div class="value">{{ $duration }}</div>
            </div>
            
            @if($notes)
            <div class="field">
                <div class="label">Notes:</div>
                <div class="value">{{ $notes }}</div>
            </div>
            @endif
            
            <div class="field">
                <div class="label">Submitted:</div>
                <div class="value">{{ now()->format('F j, Y \a\t g:i A') }}</div>
            </div>
        </div>
        
        <div class="footer">
            <p>This email was sent from your RTM Trucking website contact form.</p>
        </div>
    </div>
</body>
</html>
