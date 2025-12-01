const express = require("express");
const path = require("path");
const app = express();
const PORT = process.env.PORT || 3000;

// Serve all files in this folder (HTML, CSS, JS, images)
app.use(express.static(path.join(__dirname)));

// For any route, send index.html by default
app.get("*", (req, res) => {
  res.sendFile(path.join(__dirname, "index.html"));
});

app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
