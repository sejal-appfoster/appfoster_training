const express = require('express');
const app = express();
const port = 3000;

app.use(express.json());

let users = [];
let projects = [];

const seedData = () => {
    users = [
        { id: 1, name: 'Alice' },
        { id: 2, name: 'Bob' },
        { id: 3, name: 'Robin' },
        { id: 4, name: 'Leo' },
        { id: 5, name: 'Navneet' },
    ];

    projects = [
        { id: 1, userId: 5, name: 'ProjectoId' },
        { id: 2, userId: 3, name: 'Harmonious Haven' },
        { id: 3, userId: 1, name: 'Civic Connect' },
        { id: 4, userId: 2, name: 'Community Connector' },
        { id: 5, userId: 4, name: 'XLo Youth' },
    ];
};

seedData();


app.get('/users', (req, res) => {
    res.json(users);
});

app.get('/user/:userId/projects', (req, res) => {
    const userId = parseInt(req.params.userId, 10);
    const userProjects = projects.filter(project => project.userId === userId);
    res.json(userProjects);
});

app.post('/user', (req, res) => {
    const newUser = {
        id: users.length + 1,
        name: req.body.name,
    };
    users.push(newUser);
    res.status(201).json(newUser);
});


app.post('/user/:userId/project', (req, res) => {
    const userId = parseInt(req.params.userId, 10);
    const newProject = {
        id: projects.length + 1,
        userId: userId,
        name: req.body.name,
    };
    projects.push(newProject);
    res.status(201).json(newProject);
});

app.delete('/user/:userId', (req, res) => {
    const userId = parseInt(req.params.userId, 10);
    users = users.filter(user => user.id !== userId);
    projects = projects.filter(project => project.userId !== userId);
    res.status(204).send();
});


app.delete('/project/:projectId', (req, res) => {
    const projectId = parseInt(req.params.projectId, 10);
    projects = projects.filter(project => project.id !== projectId);
    res.status(204).send();
});

app.listen(port, () => {
    console.log(`Server running at http://localhost:${port}/`);
});
