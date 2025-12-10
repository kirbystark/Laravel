@include('components.header')

<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #d3d3d2ff, #392d7aff);
        padding: 0;
    }

    .about-container {
        width: 1200px;
        margin: 0 auto;
        background: transparent;
        padding: 30px;
    }

    h1.title {
        text-align: center;
        font-size: 40px;
        margin-bottom: 20px;
    }

    .about-section {
        background: #d8d8d8ff;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-size: 16px;
        line-height: 1.6;
    }

    .about-section h2 {
        margin-top: 15px;
        margin-bottom: 10px;
        font-size: 28px;
    }

    .about-section ul {
        padding-left: 20px;
    }

    .skills-section {
        margin-top: 25px;
    }

    .skill {
        margin-bottom: 20px;
    }

    .skill p {
        margin: 8px 0;
        font-size: 15px;
        font-weight: 600;
    }

    .skill-bar {
        width: 100%;
        background: #e9ecef;
        border-radius: 10px;
        height: 12px;
        overflow: hidden;
    }

    .skill-level {
        height: 100%;
        text-align: center;
        font-size: 11px;
        font-weight: bold;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
    }

    .creativity { width: 85%; background: #218838; }
    .html { width: 60%; background: #17c1e8; }
    .aiming { width: 100%; background: #f4c20d; }
</style>

<div class="about-container">
    <h1 class="title">About Me</h1>

    <div class="about-section">
        <p>
            Hi! I’m <strong>Kirby Mayuyu</strong>, a passionate web developer based in <strong>Angeles City, Pampanga</strong>. 
            Second-year Computer Science student passionate about coding, problem-solving, and building innovative tech solutions.
        </p>

        <h2>More About Me</h2>
        <p>
            I'm a hardworking Computer Science student driven by curiosity and a passion for technology.
            I enjoy tackling complex problems and constantly pushing myself to learn and grow.
        </p>

        <ul>
            <li>2018-2019, 2021-2022 - Tennis Ballboy
                <br>I worked as a ballboy in tennis at Villa Gloria Tennis Club.</li>
            <li>2023 - Highschool Graduated
                <br>I graduated in Sto. Domingo Integrated School.</li>
        </ul>

        <h2>Skills & Expertise</h2>
        <ul>
            <li>Laravel & PHP</li>
            <li>JavaScript</li>
            <li>HTML5 & CSS3</li>
            <li>Database design & optimization</li>
        </ul>

        <h2>Outside of Coding</h2>
        <p>
            When I’m not coding, I enjoy hiking, reading sci-fi novels, and exploring new coffee shops around the city.
        </p>

        <p>
            If you’d like to work together or just say hello, feel free to 
            <a href="{{ url('contact') }}">get in touch!</a>
        </p>

        <h2>My Skills</h2>

        <div class="skills-section">

            <div class="skill">
                <p>Creativity</p>
                <div class="skill-bar">
                    <div class="skill-level creativity">85%</div>
                </div>
            </div>

            <div class="skill">
                <p>html</p>
                <div class="skill-bar">
                    <div class="skill-level html">50%</div>
                </div>
            </div>

            <div class="skill">
                <p>Aiming High</p>
                <div class="skill-bar">
                    <div class="skill-level aiming">90%</div>
                </div>
            </div>

        </div>

    </div>
</div>

@include('components.footer')
