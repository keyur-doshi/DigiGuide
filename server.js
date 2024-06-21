const express = require('express');
const app = express();
const port = 3000; // You can change the port as needed

// Middleware to serve static files (HTML, CSS, images, etc.) from the "public" directory
app.use(express.static('public'));
app.use(express.json());

// Example timetable data
let timetableData = {
  "Monday": ["Math", "Chemistry", "Physics", "English", "History"],
  "Tuesday": ["Physics", "Math", "Chemistry", "History", "English"],
  "Wednesday": ["History", "English", "Math", "Physics", "Chemistry"],
  "Thursday": ["", "", "", "", ""], // You can initialize this with empty values
  "Friday": ["Chemistry", "History", "English", "Math", "Physics"]
};

// Endpoint to get timetable data
app.get('/timetable', (req, res) => {
  res.json(timetableData);
});

// Endpoint to update timetable data
app.put('/timetable', (req, res) => {
  timetableData = req.body;
  res.json({ message: 'Timetable updated successfully' });
});

app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
