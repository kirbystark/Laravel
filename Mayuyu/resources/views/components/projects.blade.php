@include('components.header')

<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #d3d3d2ff, #392d7aff);
    }

    .page-content {
        display: flex;
        justify-content: center;
        padding: 40px 20px;
    }

    .projects-wrapper {
        width: 900px;
    }

    h1.title {
        text-align: center;
        font-size: 40px;
        margin-bottom: 30px;
    }

    /* Project cards container */
    .projects-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
    }

    /* Each project card */
    .project-card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        transition: 0.3s ease;
    }

    .project-card:hover {
        transform: translateY(-4px);
    }

    .project-card img {
        width: 100%;
        max-height: 180px;
        object-fit: contain;
        padding: 10px;
    }

    .project-info {
        padding: 15px;
    }

    .project-info h3 {
        margin-bottom: 10px;
        font-size: 22px;
    }

    .project-info p {
        margin-bottom: 15px;
        font-size: 14px;
        line-height: 1.4;
    }

    .project-btn {
        display: inline-block;
        background: #392d7a;
        color: white;
        padding: 8px 12px;
        border-radius: 6px;
        font-size: 14px;
        text-decoration: none;
        transition: 0.3s ease;
    }

    .project-btn:hover {
        background: #2d2361;
    }
</style>

<div class="page-content">
    <div class="projects-wrapper">

        <h1 class="title">My Projects</h1>

        <div class="projects-grid">

            <!-- PROJECT 1 -->
            <div class="project-card">
                <img src="images/project1.png" alt="Project Image">
                <div class="project-info">
                    <h3>WorkMagnet</h3>
                    <p>WorkMagnet is a job platform, it's our HCOMMIT final project with chiristian louie galang in our 2nd year 2nd semester.</p>
                    <a href="https://www.figma.com/proto/EOB4KXOj4Yp3KOKNLdDrJD/final-project-hci?node-id=35-417&starting-point-node-id=51%3A115&t=Wsxj3M6Op5EACUlC-1"
                     class="project-btn">View Figma Project</a>
                </div>
            </div>

            <!-- PROJECT 2 -->
            <div class="project-card">
                <img src="images/project2.png" alt="Project Image">
                <div class="project-info">
                    <h3>EventPulse</h3>
                    <p>EventPulse is a event booking platform, it's our SOFENG2 and WEB1 final project and i only the one who create the platform.<br>(i can't put the official files, so i put only the ppt.)</p>
                    <a href="https://www.canva.com/design/DAGnl8itMiI/btp9VEz9cW_vB6hDAYRvVQ/edit?utm_content=DAGnl8itMiI&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton"
                     class="project-btn">View Project</a>
                </div>
            </div>
        </div>

    </div>
</div>

@include('components.footer')
