<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orynta Hub Pizzeria - Authentic Wood-Fired Pizza Since 1987</title>
    <meta name="description" content="Orynta Hub Pizzeria serves authentic wood-fired pizzas made with fresh ingredients and traditional recipes. Family-owned restaurant offering dine-in, takeout, and delivery services. Click here to continue exploring our delicious menu and rich history spanning over three decades of culinary excellence.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #2c3e50;
            background-color: #f8f9fa;
        }

        .nav-container-xyz789 {
            background: linear-gradient(135deg, #d35400, #e67e22);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-wrapper-abc123 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-section-def456 {
            font-size: 2rem;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .nav-menu-ghi789 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu-ghi789 a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        .nav-menu-ghi789 a:hover {
            background-color: rgba(255,255,255,0.2);
        }

        .hero-section-jkl012 {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/315755/pexels-photo-315755.jpeg') center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content-mno345 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-pqr678 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.5);
        }

        .hero-subtitle-stu901 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-vwx234 {
            display: inline-block;
            background: #e74c3c;
            color: white;
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(231, 76, 60, 0.3);
        }

        .cta-button-vwx234:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(231, 76, 60, 0.4);
        }

        .section-wrapper-yza567 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .about-section-bcd890 {
            background: white;
            border-radius: 15px;
            padding: 3rem;
            margin: 2rem 0;
            box-shadow: 0 5px 25px rgba(0,0,0,0.1);
        }

        .section-title-efg123 {
            font-size: 2.5rem;
            color: #d35400;
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
        }

        .section-title-efg123::after {
            content: '';
            display: block;
            width: 100px;
            height: 3px;
            background: #e67e22;
            margin: 1rem auto;
        }

        .content-grid-hij456 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .content-card-klm789 {
            background: #ecf0f1;
            padding: 2rem;
            border-radius: 10px;
            border-left: 5px solid #e67e22;
        }

        .card-title-nop012 {
            font-size: 1.5rem;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .history-timeline-qrs345 {
            background: linear-gradient(45deg, #3498db, #2980b9);
            color: white;
            padding: 3rem;
            margin: 3rem 0;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
        }

        .history-timeline-qrs345::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: url('https://images.pexels.com/photos/1566837/pexels-photo-1566837.jpeg') center/cover;
            opacity: 0.1;
            transform: rotate(15deg);
        }

        .timeline-content-tuv678 {
            position: relative;
            z-index: 2;
        }

        .specialties-grid-wxy901 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .specialty-card-zab234 {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .specialty-card-zab234:hover {
            transform: translateY(-10px);
        }

        .card-image-cde567 {
            height: 200px;
            background-size: cover;
            background-position: center;
        }

        .card-content-fgh890 {
            padding: 1.5rem;
        }

        .reviews-section-ijk123 {
            background: linear-gradient(135deg, #8e44ad, #9b59b6);
            color: white;
            padding: 4rem 2rem;
            margin: 3rem 0;
            border-radius: 25px;
        }

        .review-grid-lmn456 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .review-card-opq789 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .reviewer-name-rst012 {
            font-weight: bold;
            margin-top: 1rem;
            color: #f39c12;
        }

        .services-section-uvw345 {
            background: #2c3e50;
            color: white;
            padding: 4rem 2rem;
            margin: 3rem 0;
            border-radius: 20px;
        }

        .services-grid-xyz678 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .service-item-abc901 {
            background: #34495e;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
        }

        .service-icon-def234 {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #f39c12;
        }

        .location-section-ghi567 {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            margin: 2rem 0;
            box-shadow: 0 5px 25px rgba(0,0,0,0.1);
        }

        .location-grid-jkl890 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .contact-info-mno123 {
            background: #ecf0f1;
            padding: 2rem;
            border-radius: 10px;
        }

        .contact-item-pqr456 {
            margin: 1rem 0;
            font-size: 1.1rem;
        }

        .phone-link-stu789 {
            color: #e74c3c;
            text-decoration: none;
            font-weight: bold;
        }

        .phone-link-stu789:hover {
            text-decoration: underline;
        }

        .footer-section-vwx012 {
            background: #2c3e50;
            color: white;
            padding: 3rem 2rem 1rem;
            text-align: center;
        }

        .footer-content-yza345 {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-links-bcd678 {
            margin: 2rem 0;
        }

        .footer-links-bcd678 a {
            color: #ecf0f1;
            text-decoration: none;
            margin: 0 1rem;
            cursor: pointer;
        }

        .footer-links-bcd678 a:hover {
            color: #f39c12;
        }

        .modal-overlay-efg901 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 10000;
        }

        .modal-content-hij234 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 15px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-klm567 {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #e74c3c;
        }

        .continue-link-nop890 {
            background: #27ae60;
            color: white;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 25px;
            display: inline-block;
            margin: 1rem 0;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .continue-link-nop890:hover {
            background: #229954;
            transform: scale(1.05);
        }

        .ingredients-section-qrs123 {
            background: linear-gradient(45deg, #16a085, #1abc9c);
            color: white;
            padding: 4rem 2rem;
            margin: 3rem 0;
            border-radius: 20px;
            position: relative;
        }

        .ingredients-grid-tuv456 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .ingredient-item-wxy789 {
            background: rgba(255,255,255,0.15);
            padding: 1.5rem;
            border-radius: 10px;
            text-align: center;
            backdrop-filter: blur(5px);
        }

        @media (max-width: 768px) {
            .nav-wrapper-abc123 {
                flex-direction: column;
                gap: 1rem;
            }

            .nav-menu-ghi789 {
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero-title-pqr678 {
                font-size: 2.5rem;
            }

            .location-grid-jkl890 {
                grid-template-columns: 1fr;
            }

            .section-wrapper-yza567 {
                padding: 2rem 1rem;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%31%31%32%65%33%33%30%33%65%63%68%6F%32%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%31%31%32%65%33%33%30%33%65%63%68%6F%32%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%31%31%32%65%33%33%30%33%65%63%68%6F%32%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

    <nav class="nav-container-xyz789">
        <div class="nav-wrapper-abc123">
            <div class="logo-section-def456">Orynta Hub Pizzeria</div>
            <ul class="nav-menu-ghi789">
                <li><a href="#about-anchor-zxc123">About Us</a></li>
                <li><a href="#history-anchor-vbn456">Our History</a></li>
                <li><a href="#specialties-anchor-asd789">Specialties</a></li>
                <li><a href="#ingredients-anchor-qwe012">Fresh Ingredients</a></li>
                <li><a href="#reviews-anchor-rty345">Reviews</a></li>
                <li><a href="#services-anchor-uio678">Services</a></li>
                <li><a href="#location-anchor-pas901">Location</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero-section-jkl012">
        <div class="hero-content-mno345">
            <h1 class="hero-title-pqr678">Authentic Wood-Fired Pizza</h1>
            <p class="hero-subtitle-stu901">Serving the community with traditional recipes and fresh ingredients since 1987</p>
            <a href="#about-anchor-zxc123" class="cta-button-vwx234">Discover Our Story</a>
        </div>
    </section>

    <div class="section-wrapper-yza567">
        <section id="about-anchor-zxc123" class="about-section-bcd890">
            <h2 class="section-title-efg123">Welcome to Orynta Hub Pizzeria</h2>
            <div class="content-grid-hij456">
                <div class="content-card-klm789">
                    <h3 class="card-title-nop012">Our Mission</h3>
                    <p>At Orynta Hub Pizzeria, we believe in bringing families together through exceptional food experiences. Our wood-fired ovens create the perfect crust while our carefully selected ingredients ensure every bite is memorable. We source locally whenever possible and maintain the highest standards of food safety and quality.</p>
                    <a href="#specialties-anchor-asd789" class="continue-link-nop890">Click Here to Continue</a>
                </div>
                <div class="content-card-klm789">
                    <h3 class="card-title-nop012">Community Focus</h3>
                    <p>We're more than just a restaurant - we're a cornerstone of the local community. From sponsoring youth sports teams to hosting charity events, Orynta Hub Pizzeria has been actively involved in making our neighborhood a better place for over three decades.</p>
                </div>
                <div class="content-card-klm789">
                    <h3 class="card-title-nop012">Artisan Craftsmanship</h3>
                    <p>Every pizza is hand-stretched and topped with precision. Our dough is made fresh daily using a recipe passed down through generations. The wood-fired oven reaches temperatures of 900°F, creating that perfect char and smoky flavor that sets us apart from ordinary pizza places.</p>
                </div>
            </div>
        </section>

        <section id="history-anchor-vbn456" class="history-timeline-qrs345">
            <div class="timeline-content-tuv678">
                <h2 class="section-title-efg123" style="color: white;">Our Rich History</h2>
                <div class="content-grid-hij456">
                    <div>
                        <h3 style="color: #f39c12; font-size: 1.8rem;">1987 - The Beginning</h3>
                        <p>Giuseppe and Maria Rosetti opened the first Orynta Hub Pizzeria in a small storefront with just four tables and a dream. They brought authentic Italian recipes from Giuseppe's hometown in Naples, including the secret to perfect pizza dough that had been in his family for generations.</p>
                    </div>
                    <div>
                        <h3 style="color: #f39c12; font-size: 1.8rem;">1995 - Expansion Era</h3>
                        <p>Due to overwhelming community support, we expanded to include a full dining room and added our signature wood-fired oven, imported directly from Italy. This allowed us to achieve the authentic taste and texture that made our pizzas legendary in the area.</p>
                    </div>
                    <div>
                        <h3 style="color: #f39c12; font-size: 1.8rem;">2003 - Next Generation</h3>
                        <p>The Rosetti children, Tony and Isabella, joined the business full-time, bringing fresh ideas while maintaining the traditional values. They introduced new specialty pizzas and expanded our catering services to serve the growing community.</p>
                        <a href="#ingredients-anchor-qwe012" class="continue-link-nop890">Click Here to Continue</a>
                    </div>
                    <div>
                        <h3 style="color: #f39c12; font-size: 1.8rem;">2015 - Modern Touch</h3>
                        <p>We renovated the restaurant to include modern amenities while preserving the rustic charm that customers love. Added online ordering system and delivery services to better serve our loyal customers in the digital age.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="specialties-anchor-asd789" class="about-section-bcd890">
            <h2 class="section-title-efg123">Our Signature Specialties</h2>
            <div class="specialties-grid-wxy901">
                <div class="specialty-card-zab234">
                    <div class="card-image-cde567" style="background-image: url('https://images.pexels.com/photos/2147491/pexels-photo-2147491.jpeg');"></div>
                    <div class="card-content-fgh890">
                        <h3 class="card-title-nop012">Margherita Classica</h3>
                        <p>Our signature pizza featuring San Marzano tomatoes, fresh mozzarella di bufala, and aromatic basil leaves. Cooked in our wood-fired oven at 900°F for the perfect balance of crispy crust and melted cheese.</p>
                    </div>
                </div>
                <div class="specialty-card-zab234">
                    <div class="card-image-cde567" style="background-image: url('https://images.pexels.com/photos/1146760/pexels-photo-1146760.jpeg');"></div>
                    <div class="card-content-fgh890">
                        <h3 class="card-title-nop012">Quattro Stagioni</h3>
                        <p>A masterpiece representing the four seasons with artichokes, mushrooms, ham, and olives. Each quarter tells a different story while harmonizing perfectly on our hand-stretched dough base.</p>
                    </div>
                </div>
                <div class="specialty-card-zab234">
                    <div class="card-image-cde567" style="background-image: url('https://images.pexels.com/photos/708587/pexels-photo-708587.jpeg');"></div>
                    <div class="card-content-fgh890">
                        <h3 class="card-title-nop012">Orynta Special</h3>
                        <p>Our house creation featuring locally sourced vegetables, artisanal cheeses, and herbs from our own garden. This unique combination has become a customer favorite over the years.</p>
                    </div>
                </div>
                <div class="specialty-card-zab234">
                    <div class="card-image-cde567" style="background-image: url('https://images.pexels.com/photos/1653877/pexels-photo-1653877.jpeg');"></div>
                    <div class="card-content-fgh890">
                        <h3 class="card-title-nop012">Calzone Tradizionale</h3>
                        <p>Hand-folded pizza dough filled with ricotta, mozzarella, and your choice of traditional fillings. Baked until golden brown and served with our homemade marinara sauce for dipping.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="ingredients-anchor-qwe012" class="ingredients-section-qrs123">
            <h2 class="section-title-efg123" style="color: white;">Fresh, Quality Ingredients</h2>
            <p style="text-align: center; font-size: 1.2rem; margin-bottom: 2rem;">We believe great pizza starts with exceptional ingredients. Every component is carefully selected for quality, freshness, and authentic flavor.</p>
            <div class="ingredients-grid-tuv456">
                <div class="ingredient-item-wxy789">
                    <h4>San Marzano Tomatoes</h4>
                    <p>Imported directly from Italy for authentic flavor</p>
                </div>
                <div class="ingredient-item-wxy789">
                    <h4>Fresh Mozzarella</h4>
                    <p>Made daily by local artisan cheese makers</p>
                </div>
                <div class="ingredient-item-wxy789">
                    <h4>Organic Flour</h4>
                    <p>Stone-ground wheat for perfect dough texture</p>
                </div>
                <div class="ingredient-item-wxy789">
                    <h4>Garden Herbs</h4>
                    <p>Grown in our own herb garden behind the restaurant</p>
                </div>
                <div class="ingredient-item-wxy789">
                    <h4>Extra Virgin Olive Oil</h4>
                    <p>Cold-pressed from family groves in Tuscany</p>
                </div>
                <div class="ingredient-item-wxy789">
                    <h4>Local Vegetables</h4>
                    <p>Sourced from nearby farms for maximum freshness</p>
                </div>
            </div>
        </section>

        <section id="reviews-anchor-rty345" class="reviews-section-ijk123">
            <h2 class="section-title-efg123" style="color: white;">What Our Customers Say</h2>
            <div class="review-grid-lmn456">
                <div class="review-card-opq789">
                    <p>"Absolutely incredible! The wood-fired pizza here reminds me of my trip to Naples. The crust is perfectly charred, and the ingredients taste so fresh. Giuseppe and his family have created something truly special."</p>
                    <div class="reviewer-name-rst012">- Sarah Mitchell, Food Blogger</div>
                </div>
                <div class="review-card-opq789">
                    <p>"We've been coming here for over 15 years, and the quality never disappoints. It's our go-to place for family celebrations. The Quattro Stagioni is my personal favorite - each bite is perfection."</p>
                    <div class="reviewer-name-rst012">- Robert Chen, Local Resident</div>
                </div>
                <div class="review-card-opq789">
                    <p>"The atmosphere is warm and welcoming, just like eating at a friend's house. The staff knows our order by heart, and they always make us feel like family. Best pizza in the entire state!"</p>
                    <div class="reviewer-name-rst012">- Jennifer Rodriguez, Regular Customer</div>
                </div>
                <div class="review-card-opq789">
                    <p>"As someone who's traveled extensively through Italy, I can confidently say this is authentic Italian pizza. The attention to detail and passion for the craft really shows in every dish."</p>
                    <div class="reviewer-name-rst012">- Michael Thompson, Travel Writer</div>
                    <a href="#services-anchor-uio678" class="continue-link-nop890">Click Here to Continue</a>
                </div>
                <div class="review-card-opq789">
                    <p>"Ordered catering for our office party and everyone was amazed. The pizzas arrived hot and fresh, and the variety satisfied everyone's tastes. Professional service from start to finish."</p>
                    <div class="reviewer-name-rst012">- Amanda Foster, Event Coordinator</div>
                </div>
                <div class="review-card-opq789">
                    <p>"The calzones are enormous and delicious! Great value for money, and the homemade marinara sauce is the perfect complement. This place has become our weekly tradition."</p>
                    <div class="reviewer-name-rst012">- David Park, College Student</div>
                </div>
            </div>
        </section>

        <section id="services-anchor-uio678" class="services-section-uvw345">
            <h2 class="section-title-efg123" style="color: white;">Our Services</h2>
            <div class="services-grid-xyz678">
                <div class="service-item-abc901">
                    <div class="service-icon-def234">🍕</div>
                    <h3>Dine-In Experience</h3>
                    <p>Enjoy our cozy atmosphere with family and friends. Watch our skilled pizzaiolos craft your pizza in our open kitchen featuring the authentic wood-fired oven.</p>
                </div>
                <div class="service-item-abc901">
                    <div class="service-icon-def234">🚗</div>
                    <h3>Fast Takeout</h3>
                    <p>Quick and convenient pickup service. Order ahead by phone or online, and your fresh pizza will be ready when you arrive. Perfect for busy weeknight dinners.</p>
                </div>
                <div class="service-item-abc901">
                    <div class="service-icon-def234">🚚</div>
                    <h3>Local Delivery</h3>
                    <p>We deliver hot, fresh pizza directly to your door within a 5-mile radius. Our insulated delivery bags ensure your pizza arrives at the perfect temperature.</p>
                </div>
                <div class="service-item-abc901">
                    <div class="service-icon-def234">🎉</div>
                    <h3>Event Catering</h3>
                    <p>Make your special events memorable with our catering services. From birthday parties to corporate meetings, we provide fresh pizza and exceptional service.</p>
                    <a href="#location-anchor-pas901" class="continue-link-nop890">Click Here to Continue</a>
                </div>
                <div class="service-item-abc901">
                    <div class="service-icon-def234">👨‍🍳</div>
                    <h3>Private Events</h3>
                    <p>Book our restaurant for private parties and celebrations. We can accommodate groups of various sizes and create custom menus for your special occasion.</p>
                </div>
                <div class="service-item-abc901">
                    <div class="service-icon-def234">🎓</div>
                    <h3>Pizza Making Classes</h3>
                    <p>Learn the art of authentic pizza making from our experienced chefs. Monthly classes cover dough preparation, sauce making, and wood-fired oven techniques.</p>
                </div>
            </div>
        </section>

        <section id="location-anchor-pas901" class="location-section-ghi567">
            <h2 class="section-title-efg123">Visit Us Today</h2>
            <div class="location-grid-jkl890">
                <div>
                    <img src="https://images.pexels.com/photos/1581384/pexels-photo-1581384.jpeg" alt="Restaurant Interior" style="width: 100%; border-radius: 10px; height: 300px; object-fit: cover;">
                </div>
                <div class="contact-info-mno123">
                    <div class="contact-item-pqr456">
                        <strong>📍 Address:</strong><br>
                        2847 Maple Street<br>
                        Downtown District<br>
                        Springfield, IL 62701
                    </div>
                    <div class="contact-item-pqr456">
                        <strong>📞 Phone:</strong><br>
                        <a href="tel:+15559876543" class="phone-link-stu789">(555) 987-6543</a>
                    </div>
                    <div class="contact-item-pqr456">
                        <strong>🕒 Hours:</strong><br>
                        Monday - Thursday: 11:00 AM - 10:00 PM<br>
                        Friday - Saturday: 11:00 AM - 11:00 PM<br>
                        Sunday: 12:00 PM - 9:00 PM
                    </div>
                    <div class="contact-item-pqr456">
                        <strong>✉️ Email:</strong><br>
                        info@oryntahub.com
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer-section-vwx012">
        <div class="footer-content-yza345">
            <h3>Orynta Hub Pizzeria</h3>
            <p>Serving authentic wood-fired pizza since 1987</p>
            <div class="footer-links-bcd678">
                <a onclick="showModal('privacy')">Privacy Policy</a>
                <a onclick="showModal('terms')">Terms of Service</a>
                <a href="tel:+15559876543">Call Us: (555) 987-6543</a>
            </div>
                        <div class="contact-item-pqr456">
                <strong>📧 Email:</strong> info@oryntahub.com<br>
                <strong>📱 Follow Us:</strong> @OryntaHubPizza
            </div>
            <p style="margin-top: 2rem; font-size: 0.9rem; opacity: 0.8;">
                © 2024 Orynta Hub Pizzeria. All rights reserved. Family owned and operated with pride.
            </p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-efg901">
        <div class="modal-content-hij234">
            <span class="modal-close-klm567" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last Updated:</strong> January 2024</p>
            
            <h3>Information We Collect</h3>
            <p>At Orynta Hub Pizzeria, we collect information you provide directly to us, such as when you place an order, make a reservation, or contact us. This may include your name, phone number, email address, delivery address, and payment information.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to process your orders, communicate with you about your orders, provide customer service, send you promotional materials (with your consent), and improve our services.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties except as described in this policy. We may share information with trusted service providers who assist us in operating our restaurant and serving our customers.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Your Rights</h3>
            <p>You have the right to access, update, or delete your personal information. You may also opt out of receiving promotional communications from us at any time.</p>
            
            <h3>Contact Information</h3>
            <p>If you have questions about this Privacy Policy, please contact us at info@oryntahub.com or call (555) 987-6543.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-efg901">
        <div class="modal-content-hij234">
            <span class="modal-close-klm567" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Last Updated:</strong> January 2024</p>
            
            <h3>Acceptance of Terms</h3>
            <p>By using our services, ordering food, or visiting our restaurant, you agree to be bound by these Terms of Service. If you do not agree to these terms, please do not use our services.</p>
            
            <h3>Restaurant Services</h3>
            <p>Orynta Hub Pizzeria provides food preparation, dine-in, takeout, delivery, and catering services. We reserve the right to refuse service to anyone for any reason at any time.</p>
            
            <h3>Orders and Payment</h3>
            <p>All orders are subject to acceptance by us. We reserve the right to cancel any order at any time. Payment is due at the time of order placement for takeout and delivery orders.</p>
            
            <h3>Delivery Policy</h3>
            <p>Delivery is available within our designated delivery area. Delivery times are estimates and may vary based on weather, traffic, and order volume. A delivery fee may apply.</p>
            
            <h3>Food Allergies and Dietary Restrictions</h3>
            <p>Please inform us of any food allergies or dietary restrictions when placing your order. While we take precautions, we cannot guarantee that our food is free from allergens.</p>
            
            <h3>Limitation of Liability</h3>
            <p>Our liability is limited to the cost of the food ordered. We are not liable for any indirect, incidental, or consequential damages.</p>
            
            <h3>Changes to Terms</h3>
            <p>We reserve the right to modify these terms at any time. Continued use of our services constitutes acceptance of any changes.</p>
            
            <h3>Contact Information</h3>
            <p>For questions about these Terms of Service, contact us at info@oryntahub.com or (555) 987-6543.</p>
        </div>
    </div>

    <script>
        function showModal(type) {
            document.getElementById(type + '-modal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal(type) {
            document.getElementById(type + '-modal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const privacyModal = document.getElementById('privacy-modal');
            const termsModal = document.getElementById('terms-modal');
            
            if (event.target === privacyModal) {
                closeModal('privacy');
            }
            if (event.target === termsModal) {
                closeModal('terms');
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.nav-container-xyz789');
            if (window.scrollY > 100) {
                nav.style.background = 'linear-gradient(135deg, #c0392b, #d35400)';
            } else {
                nav.style.background = 'linear-gradient(135deg, #d35400, #e67e22)';
            }
        });

        // Animate cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all cards for animation
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.specialty-card-zab234, .content-card-klm789, .review-card-opq789');
            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });
        });

        // Add loading animation for images
        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('load', function() {
                this.style.opacity = '1';
            });
            img.style.opacity = '0';
            img.style.transition = 'opacity 0.3s ease';
        });

        // Phone number click tracking
        document.querySelectorAll('.phone-link-stu789').forEach(link => {
            link.addEventListener('click', function() {
                console.log('Phone number clicked for call tracking');
            });
        });

        // Form validation and interaction enhancement
        const continueButtons = document.querySelectorAll('.continue-link-nop890');
        continueButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                // Add click animation
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1.05)';
                }, 100);
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 200);
            });
        });

        // Add hover effects for service items
        document.querySelectorAll('.service-item-abc901').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 10px 25px rgba(0,0,0,0.2)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = 'none';
            });
        });

        // Add dynamic content loading simulation
        setTimeout(() => {
            const dynamicContent = document.createElement('div');
            dynamicContent.innerHTML = `
                <div style="background: #f8f9fa; padding: 2rem; margin: 2rem 0; border-radius: 10px; text-align: center;">
                    <h3 style="color: #d35400; margin-bottom: 1rem;">🎉 Special Announcement</h3>
                    <p>Join us every Tuesday for our traditional Pizza Making Workshop! Learn from our master pizzaiolo Giuseppe Jr. and take home your own handcrafted pizza. Limited spots available - call to reserve!</p>
                </div>
            `;
            
            const targetSection = document.querySelector('#services-anchor-uio678');
            if (targetSection) {
                targetSection.appendChild(dynamicContent);
            }
        }, 3000);

        // Add seasonal greeting based on current date
        const now = new Date();
        const month = now.getMonth();
        let seasonalMessage = '';

        if (month >= 2 && month <= 4) {
            seasonalMessage = '🌸 Spring Special: Fresh herb pizzas featuring ingredients from our garden!';
        } else if (month >= 5 && month <= 7) {
            seasonalMessage = ☀️ Summer Favorites: Light and fresh pizzas perfect for warm weather dining!';
        } else if (month >= 8 && month <= 10) {
            seasonalMessage = '🍂 Autumn Harvest: Seasonal pizzas with locally sourced fall vegetables!';
        } else {
            seasonalMessage = '❄️ Winter Warmth: Hearty pizzas and hot appetizers to warm your soul!';
        }

        // Add seasonal message to hero section
        setTimeout(() => {
            const heroSubtitle = document.querySelector('.hero-subtitle-stu901');
            if (heroSubtitle) {
                heroSubtitle.innerHTML += `<br><small style="font-size: 0.9em; opacity: 0.8;">${seasonalMessage}</small>`;
            }
        }, 2000);

        // Add interactive elements for better user engagement
        document.addEventListener('DOMContentLoaded', function() {
            // Add click counters for analytics
            let clickCounter = 0;
            document.addEventListener('click', function() {
                clickCounter++;
                if (clickCounter % 10 === 0) {
                    console.log(`User engagement: ${clickCounter} clicks recorded`);
                }
            });

            // Add scroll depth tracking
            let maxScroll = 0;
            window.addEventListener('scroll', function() {
                const scrollPercent = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
                if (scrollPercent > maxScroll) {
                    maxScroll = Math.round(scrollPercent);
                    if (maxScroll % 25 === 0) {
                        console.log(`Scroll depth: ${maxScroll}%`);
                    }
                }
            });
        });

        // Add time-based content updates
        const updateTimeBasedContent = () => {
            const now = new Date();
            const hour = now.getHours();
            const timeBasedElements = document.querySelectorAll('.time-sensitive-content');
            
            let timeMessage = '';
            if (hour >= 11 && hour < 14) {
                timeMessage = 'Perfect time for our lunch specials!';
            } else if (hour >= 17 && hour < 21) {
                timeMessage = 'Dinner time - our busiest and most vibrant hours!';
            } else if (hour >= 21 || hour < 11) {
                timeMessage = 'Planning ahead? We open at 11 AM with fresh pizza daily!';
            }

            // Update any time-sensitive content areas
            timeBasedElements.forEach(element => {
                element.textContent = timeMessage;
            });
        };

        // Run time-based updates
        updateTimeBasedContent();
        setInterval(updateTimeBasedContent, 300000); // Update every 5 minutes
    </script>

    <!-- Additional structured data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Restaurant",
        "name": "Orynta Hub Pizzeria",
        "description": "Authentic wood-fired pizza restaurant serving traditional Italian recipes since 1987",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "2847 Maple Street",
            "addressLocality": "Springfield",
            "addressRegion": "IL",
            "postalCode": "62701"
        },
        "telephone": "+15559876543",
        "email": "info@oryntahub.com",
        "url": "https://oryntahub.com",
        "openingHours": [
            "Mo-Th 11:00-22:00",
            "Fr-Sa 11:00-23:00", 
            "Su 12:00-21:00"
        ],
        "servesCuisine": "Italian",
        "priceRange": "$$",
        "foundingDate": "1987",
        "founder": {
            "@type": "Person",
            "name": "Giuseppe Rosetti"
        }
    }
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>



