<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-image: url('bg.png');
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Cursive, Brush Script MT;
}

.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}
.recaptcha-container {
    display: flex;
    justify-content: center;
    margin-top: 20px; /* Optional, for some spacing */
}
.login-box {
    height: 50%;
    background-color: #016067;
    padding: 30px;
    border-radius: 40px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
    width: 300px;
    text-align: center;
}

.input-group {
    margin-bottom: 20px;
}

.input-group label {
    font-weight: 50%;
    display: block;
    margin-bottom: 10px;
    font-size: 18px;
    color: white;
}

.input-group input {
    width: 80%;
    padding: 10px;
    border-radius: 25px;
    border: none;
    background-color: #C0C0C0;
    color: white;
    font-size: 16px;
    text-align: center;
}

.submit-group {
    margin-top: 40px;
}

.submit-group button {
    width: 50%;
    padding: 10px;
    border-radius: 25px;
    border: none;
    background-color: #C0C0C0;
    color: black;
    font-size: 16px;
    cursor: pointer;
}

.submit-group button:hover {
    background-color: #666;
}
</style>