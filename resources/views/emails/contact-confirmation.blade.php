<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting RTM Trucking</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #088c8a; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background-color: #f9f9f9; }
        .highlight { background-color: #e1fffe; padding: 15px; border-left: 4px solid #088c8a; margin: 20px 0; }
        .contact-info { background-color: white; padding: 15px; margin: 20px 0; border-radius: 5px; }
        .footer { text-align: center; padding: 20px; color: #666; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Thank You for Contacting RTM Trucking!</h1>
        </div>
        
        <div class="content">
            <p>Dear {{ $name }},</p>
            
            <p>Thank you for reaching out to RTM Trucking! We have received your inquiry and will get back to you within 24 hours.</p>
            
            <div class="highlight">
                <h3>Your Request Summary:</h3>
                <p><strong>Container Need:</strong> {{ $container_need }}</p>
                <p><strong>Duration:</strong> {{ $duration }}</p>
                <p><strong>Delivery Address:</strong> {{ $delivery_address }}</p>
                @if($notes)
                <p><strong>Notes:</strong> {{ $notes }}</p>
                @endif
            </div>
            
            <p>Our team will review your requirements and contact you to discuss:</p>
            <ul>
                <li>Container availability and specifications</li>
                <li>Delivery timeline and scheduling</li>
                <li>Pricing and rental terms</li>
                <li>Any special requirements you may have</li>
            </ul>
            
            <div class="contact-info">
                <h3>Need Immediate Assistance?</h3>
                <p><strong>Phone:</strong> 973-442-1577</p>
                <p><strong>Fax:</strong> 973-442-1477</p>
                <p><strong>Address:</strong> 319 Richard Mine Road, Wharton, NJ 07885</p>
            </div>
            
            <p>We look forward to serving your storage and delivery needs!</p>
            
            <p>Best regards,<br>
            <strong>The RTM Trucking Team</strong></p>
        </div>
        
        <div class="footer">
            <p>RTM Trucking - Local Delivery. On-Site Storage. Since 2005.</p>
            <p>© 2026 RTM Trucking. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
