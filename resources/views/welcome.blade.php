<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zedray Jan S. Lafradez - Web Design Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .profile {
            text-align: center;
            margin: 20px 0;
        }
        .profile img {
            width: 150px;
            border-radius: 50%;
        }
        .profile h1 {
            margin: 10px 0;
        }
        .projects {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .project {
            background: #fff;
            margin: 20px;
            padding: 20px;
            width: 30%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .project img {
            width: 100%;
        }
        .project h3 {
            margin-top: 10px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Zedray Jan S. Lafradez</h1>
        <p>Web Developer</p>
    </header>
    <div class="container">
        <div class="profile">
            <img src="img/profile.jpg" alt="Zedray Jan S. Lafradez">
            <h1>Zedray Jan S. Lafradez</h1>
             <p>Welcome to my portfolio. I am a a budding web developer eager to explore the digital frontier. Armed with a passion for coding and a hunger for knowledge, I am ready to dive into the world of web development, one line of code at a time..</p>
        </div>
        <section class="projects">
            <div class="project">
                <img src="img/project1.jpg" alt="Project 1">
                <p>
                Our Project Management System is like the ultimate tool for teams, making project planning, doing the work, and keeping track of everything super easy. It's got everything you need: tasks, time tracking, ways to work together, cool charts to see how things are going, and ways to manage who's doing what. You can also keep an eye on the money stuff, make reports, and store all your important files in one spot. Plus, it's like magic how it connects with other tools like Slack, Trello, and Google Workspace. It's made with cool tech like React.js and Node.js, so it's smooth and works great, and it's super safe with stuff like JWT. Oh, and it even talks in real-time with WebSocket! Plus, it's all stored in the cloud with AWS S3. And the best part? It makes managing projects way simpler, so teams can get stuff done faster and easier.</p>
            </div>
            <div class="project">
                <img src="img/project2.jpg" alt="Project 2">
                 <p>
                 I came up with this awesome Collaborative Management System to help teams work together like a well-oiled machine. It's all about making teamwork easier, whether you're in the same office or across the globe. You can assign tasks, keep track of what's getting done, manage documents, schedule stuff, and plan projects with cool charts. Plus, it's got some fancy security features to keep everything safe. I built it using React.js and Node.js, so it's super smooth and can handle whatever you throw at it. It even talks in real-time, just like magic! And guess what? It plays nice with other tools like Slack and Zoom. Basically, my system is all about making work life simpler, so teams can crush their goals without breaking a sweat.</p>
            </div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Zedray Jan S. Lafradez</p>
    </footer>
</body>
</html>
