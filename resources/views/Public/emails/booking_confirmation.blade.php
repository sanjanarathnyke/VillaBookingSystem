<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Confirmation</title>
    <!-- Bootstrap and Tailwind-inspired inline styles for email compatibility -->
    <style>
        /* Base styles inspired by both frameworks but inlined for email clients */
        body {
            font-family: system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.5;
            color: #374151;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .card {
            background-color: #ffffff;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            overflow: hidden;
        }
        
        .card-header {
            background-color: #4f46e5;
            padding: 1.25rem;
            text-align: center;
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .logo {
            font-size: 1.25rem;
            font-weight: 700;
            color: #ffffff;
            margin: 0;
        }
        
        h1 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffffff;
            margin: 0.5rem 0 0;
        }
        
        .success-badge {
            display: inline-block;
            background-color: #10b981;
            color: #ffffff;
            font-size: 0.875rem;
            font-weight: 500;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            margin-top: 0.5rem;
        }
        
        .message {
            margin: 1rem 0;
            padding: 1rem;
            background-color: #f0fdf4;
            border-left: 4px solid #10b981;
            border-radius: 0.25rem;
        }
        
        .details {
            margin: 1.5rem 0;
            border: 1px solid #e5e7eb;
            border-radius: 0.375rem;
        }
        
        .detail-row {
            display: flex;
            border-bottom: 1px solid #e5e7eb;
            padding: 0.75rem 1rem;
        }
        
        .detail-row:last-child {
            border-bottom: none;
        }
        
        .detail-label {
            flex: 1;
            font-weight: 500;
            color: #6b7280;
        }
        
        .detail-value {
            flex: 2;
            text-align: right;
            color: #111827;
        }
        
        .total-price {
            font-weight: 700;
            color: #ef4444;
        }
        
        .divider {
            height: 1px;
            background-color: #e5e7eb;
            margin: 1.5rem 0;
        }
        
        .btn {
            display: inline-block;
            background-color: #4f46e5;
            color: #ffffff;
            font-weight: 500;
            text-decoration: none;
            text-align: center;
            padding: 0.625rem 1.25rem;
            border-radius: 0.375rem;
            transition: background-color 0.2s;
        }
        
        .footer {
            text-align: center;
            font-size: 0.875rem;
            color: #6b7280;
            margin-top: 2rem;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin: 1rem 0;
        }
        
        .social-icon {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            background-color: #6b7280;
            border-radius: 9999px;
        }
        
        @media (max-width: 600px) {
            .detail-row {
                flex-direction: column;
            }
            
            .detail-value {
                text-align: left;
                margin-top: 0.25rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="logo">LUXESTAY</div>
                <h1>Booking Confirmation</h1>
                <div class="success-badge">Confirmed</div>
            </div>
            
            <div class="card-body">
                <div class="message">
                    Thank you for booking with LuxeStay! Your reservation has been confirmed and we're looking forward to hosting you.
                </div>
                
                <p><strong>Reservation Details:</strong></p>
                
                <div class="details">
                    <div class="detail-row">
                        <div class="detail-label">Reservation ID</div>
                        <div class="detail-value">#{{ $booking['id'] ?? 'BK-12345' }}</div>
                    </div>
                    
                    <div class="detail-row">
                        <div class="detail-label">Check-in</div>
                        <div class="detail-value">{{ $booking['checkin'] }}</div>
                    </div>
                    
                    <div class="detail-row">
                        <div class="detail-label">Check-out</div>
                        <div class="detail-value">{{ $booking['checkout'] }}</div>
                    </div>
                    
                    <div class="detail-row">
                        <div class="detail-label">Guest Name</div>
                        <div class="detail-value">{{ $booking['name'] ?? 'Guest' }}</div>
                    </div>
                    
                    <div class="detail-row">
                        <div class="detail-label">Email</div>
                        <div class="detail-value">{{ $booking['email'] }}</div>
                    </div>
                    
                    <div class="detail-row">
                        <div class="detail-label">Extra Guests</div>
                        <div class="detail-value">{{ $booking['extra_guests'] }}</div>
                    </div>
                    
                    <div class="detail-row">
                        <div class="detail-label">Total Price</div>
                        <div class="detail-value total-price">${{ $booking['total_price'] }}</div>
                    </div>
                </div>
                
                <div style="text-align: center; margin: 1.5rem 0;">
                    <a href="#" class="btn">Manage Your Booking</a>
                </div>
                
                <div class="divider"></div>
                
                <p><strong>Important Information:</strong></p>
                <ul style="padding-left: 1.25rem; color: #4b5563;">
                    <li>Check-in time starts at 3:00 PM</li>
                    <li>Check-out time is 11:00 AM</li>
                    <li>Please have your ID ready at check-in</li>
                    <li>Free cancellation up to 48 hours before check-in</li>
                </ul>
                
                <p>If you need to make changes to your reservation or have any questions, please contact our customer service team.</p>
                
                <div style="text-align: center; margin-top: 1.5rem;">
                    <p><strong>Need assistance?</strong></p>
                    <p>Email us at <a href="mailto:support@luxestay.example" style="color: #4f46e5; text-decoration: none;">support@luxestay.example</a> or call <a href="tel:+18001234567" style="color: #4f46e5; text-decoration: none;">+1 (800) 123-4567</a></p>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <div class="social-links">
                <a href="#" class="social-icon"></a>
                <a href="#" class="social-icon"></a>
                <a href="#" class="social-icon"></a>
            </div>
            
            <p>&copy; 2025 LuxeStay. All rights reserved.</p>
            <p>123 Hospitality Avenue, Suite 500, New York, NY 10001</p>
            <p><a href="#" style="color: #6b7280; text-decoration: underline;">Privacy Policy</a> | <a href="#" style="color: #6b7280; text-decoration: underline;">Terms of Service</a> | <a href="#" style="color: #6b7280; text-decoration: underline;">Unsubscribe</a></p>
        </div>
    </div>
</body>
</html>