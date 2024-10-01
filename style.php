<style>
/* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    color: #333;
    background: #fff;
    line-height: 1.6;
    height: 100%;
}

/* Smooth Scroll */
html {
    scroll-behavior: smooth;
}

/* Header */
header {
    width: 100%;
    padding: 1rem 2rem;
    background: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
}
.logo-container {
    display: flex;
    align-items: center;
    margin-left: 25px;

}

.logo-container img {
    height: 70px; /* Adjust as needed */
    margin-right: 10px;
}
span {
    color: palevioletred;
}
/* Video Section */
.video-section {
    right: -50%;
    top: 0;
    padding: 0px 0;
    background-color: #fff;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.video-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));

}

@keyframes slide {
    0% {
        left: -100%;
    }
    100% {
        left: 100%;
    }
}

.video-section h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: #880E4F;

}

.video-container {

    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    overflow: hidden;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transform: scale(0.95);
    transition: transform 0.3s ease;
}

.video-container:hover {
    transform: scale(1);
}

video {

    width: 100%;
    height: auto;

}

@keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
}

.navbar {

    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 1.8rem;
    font-weight: 600;
    color: #333;
}

.nav-links {
    list-style: none;
}

.nav-links li {
    display: inline-block;
    margin-left: 20px;
}

.nav-links a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: #007BFF;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background: deeppink;
}
/* About Section */
.about-section {
    margin-top: auto;
    height: 100vh;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #fff;
    padding: 0 20px;
    animation: fadeInUp 1.5s ease-in-out;
    position: relative;
    overflow: hidden;
}

.about-section .illustration {
    margin-top: -5%;
    border-radius: 25%;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
    flex: 1;
    max-width: 45%;
    animation: slideInLeft 2s ease forwards;
    opacity: 0;
    transform: translateX(-100%);
    background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}

.about-section .illustration img {
    border-radius: 50%;
    width: 100%;
    height: auto;
}

.about-section .content {
    flex: 1;
    max-width: 50%;
    text-align: center;
    animation: slideInRight 2s ease forwards;
    opacity: 0;
    transform: translateX(100%);
}

.about-section h1 {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 20px;
    font-weight: 600;
}

.about-section p {

    font-size: 1.1rem;
    line-height: 1.8;
    color: #555;
    margin-bottom: 100px;
}

.cta-button {
    padding: 10px 30px;
    background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);;
    color: white;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-size: 1rem;
    font-weight: 500;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background: pink;
}

/* Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-100%);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(100%);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Educational Background Section */
.education-section {
    padding: 60px 20px;
    background-color: #f5f5f5; /* Light grey background */
    text-align: center;
    position: relative;
    overflow: hidden;
}

.education-section h2 {
    font-size: 2.5rem;
    margin-bottom: 40px;
    color: #333; /* Dark grey text for visibility */
    animation: fadeInUp 1.5s ease-in-out;
}

.education-container {
    max-width: 1000px;
    margin: 0 auto;
    position: relative;
}

.timeline {
    display: flex;
    flex-direction: column;
    position: relative;
    margin: 0 auto;
}

.timeline-item {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    margin-bottom: 40px;
    position: relative;
    animation: slideIn 1.5s ease-in-out;
}

.timeline-item:nth-child(even) .illustration {
    order: 2;
}

.timeline-item .illustration {
    flex: 1;
    max-width: 100px;
    animation: slideInLeft 2s ease;
    opacity: 1; /* Ensure the illustration is visible */
}

.timeline-item .illustration img {
    width: 100%;
    height: auto;
}

.timeline-content {
    flex: 2;
    padding-left: 20px;
    text-align: left;
    animation: fadeInUp 1.5s ease-in-out;
    opacity: 1; /* Ensure the content is visible */
}

.timeline-content h3 {
    font-size: 1.8rem;
    color: #007BFF; /* Ensure the heading is visible */
}

.timeline-content p {
    font-size: 1.2rem;
    line-height: 1.5;
    color: #666; /* Ensure the text is visible */
}

/* Animation */
@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-100px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
/* Contact Section */
.contact-section {
    padding: 60px 20px;
    background: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.contact-section h2 {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 40px;
    font-weight: bold; /* Add bold font weight */
}

.contact-content {
    text-align: center;
    display: flex;
    flex-direction: column;
    width: 100%;
    max-width: 500px; /* Set a maximum width for the content */
}

.contact-content label {
    margin-bottom: 5px;
    font-weight: bold;
}

.contact-content input,
.contact-content textarea {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 15px;
    font-size: 1rem;
}

.contact-content textarea {
    height: 150px;
    resize: vertical;
}

.contact-content button {
    margin-left: 40%;
    background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);; /* Blue background color */
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
}

.contact-content button:hover {
    background: hotpink; /* Darker blue on hover */
}
/* Footer */
.footer {
    background-color: #f4f4f4;
    padding: 20px 0;
    text-align: center;
    margin-top: 10px;
}

.social-icons {
    margin-bottom: 10px;
}

.social-icons a {
    text-decoration: none;
    color: #555;
    margin: 0 10px;
    font-size: 24px;
    transition: color 0.3s ease;
}

.social-icons a:hover {
    color: #000;
}

.footer p {
    margin-top: 10px;
    font-size: 14px;
    color: #888;
}

.footer a {
    text-decoration: none;
    color: #000;
}

.footer a:hover {
    text-decoration: underline;
}
</style>