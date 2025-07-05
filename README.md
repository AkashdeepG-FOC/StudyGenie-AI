# StudyGenie AI - AI-Based Virtual Study Planner 📚✨

[![License: ISC](https://img.shields.io/badge/License-ISC-blue.svg)](https://opensource.org/licenses/ISC)
[![Version](https://img.shields.io/badge/version-1.0.0-blue.svg)](https://github.com/Shruti627/AI-Based-Virtual-Study-Planner)
[![Status](https://img.shields.io/badge/status-active-success.svg)](https://github.com/Shruti627/AI-Based-Virtual-Study-Planner)

> In a world full of distractions and deadlines, staying focused feels… hard. We get it. StudyGenie AI is your intelligent companion for effective learning and productivity.

## 🌟 Overview

StudyGenie AI is a comprehensive web-based study planner that combines traditional task management with AI-powered features to help students and learners stay organized, motivated, and productive. The application provides an intuitive interface for managing tasks, scheduling events, tracking time, and even includes AI-generated study tasks and interactive quizzes.

## ✨ Features

### 🎯 Core Features
- **User Authentication System** - Secure login and signup with PHP backend
- **Task Management** - Create, edit, and track tasks with priorities and status
- **Calendar Integration** - Schedule and manage study events
- **AI Task Generator** - Intelligent task suggestions based on study goals
- **Pomodoro Timer** - Customizable study timer with focus sessions
- **Interactive Quiz System** - Offline trivia quizzes for knowledge testing
- **Motivational Quotes** - Daily inspirational quotes to boost motivation
- **Profile Management** - User profile customization and settings

### 🤖 AI-Powered Features
- **Smart Task Generation** - AI suggests study tasks based on input parameters
- **Intelligent Quiz System** - Dynamic question generation and scoring
- **Personalized Experience** - User-specific recommendations and tracking

### 🎨 User Experience
- **Modern UI/UX** - Beautiful gradient designs and smooth animations
- **Responsive Design** - Works seamlessly on desktop, tablet, and mobile
- **Intuitive Navigation** - Easy-to-use interface with clear navigation
- **Real-time Updates** - Dynamic content updates without page refresh

## 🛠️ Technology Stack

### Frontend
- **HTML5** - Semantic markup and structure
- **CSS3** - Modern styling with gradients and animations
- **JavaScript (ES6+)** - Interactive functionality and dynamic content
- **Font Awesome** - Icon library for enhanced UI

### Backend
- **PHP** - Server-side logic and user authentication
- **MySQL** - Database management and data persistence

### Database Schema
- **Users Table** - User authentication and profile data
- **Tasks Table** - Task management with priorities and status
- **Events Table** - Calendar events and scheduling

## 📦 Installation

### Prerequisites
- Web server (Apache/Nginx)
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Modern web browser

### Setup Instructions

1. **Clone the Repository**
   ```bash
   git clone https://github.com/AkashdeepG-FOC/StudyGenie-AI.git
   cd StudyGenie-AI
   ```

2. **Database Setup**
   ```bash
   # Import the database schema
   mysql -u your_username -p < database/schema.sql
   ```

3. **Configure Database Connection**
   ```bash
   # Edit backend/config.php with your database credentials
   nano backend/config.php
   ```

4. **Web Server Configuration**
   - Place the project in your web server's document root
   - Ensure PHP has write permissions for session management
   - Configure your web server to serve the application

5. **Access the Application**
   ```
   http://localhost/StudyGenie-AI/
   ```

## 🚀 Usage

### Getting Started
1. **Sign Up** - Create a new account with your email and password
2. **Login** - Access your personalized study dashboard
3. **Profile Setup** - Customize your profile and preferences

### Core Functionality

#### 📋 Task Management
- Create new tasks with titles, descriptions, and due dates
- Set priority levels (low, medium, high)
- Track task status (pending, in-progress, completed)
- View all tasks in an organized dashboard

#### 📅 Calendar & Events
- Schedule study sessions and events
- Set start and end times for activities
- View your schedule in a calendar format
- Manage recurring study sessions

#### ⏱️ Study Timer
- Set custom study intervals (hours, minutes, seconds)
- Use the Pomodoro technique for focused study sessions
- Track your study time and breaks
- Visual countdown with beautiful animations

#### 🤖 AI Task Generator
- Input your study goals and subjects
- Receive AI-generated task suggestions
- Get personalized study recommendations
- Adapt tasks based on your learning style

#### 🎯 Interactive Quizzes
- Choose from multiple quiz categories
- Answer questions with immediate feedback
- Track your quiz performance
- Learn through interactive engagement

#### 💪 Motivation System
- Daily inspirational quotes
- Progress tracking and achievements
- Motivational reminders and notifications

## 📁 Project Structure

```
StudyGenie-AI/
├── index.html              # Main login page
├── signup.html             # User registration
├── profile.html            # User dashboard
├── task.html               # Task management
├── calendar.html           # Calendar and events
├── timer.html              # Study timer
├── AITaskGenerator.html    # AI task generation
├── quiz.html               # Interactive quizzes
├── AItodo.html             # AI-powered todo list
├── settings.html           # User settings
├── logout.html             # Logout functionality
├── motivational.js         # Motivational quotes system
├── style.css               # Global styles
├── package.json            # Project configuration
├── backend/
│   ├── config.php          # Database configuration
│   ├── login.php           # Login authentication
│   └── signup.php          # User registration backend
└── database/
    └── schema.sql          # Database schema
```

## 🔧 Configuration

### Database Configuration
Edit `backend/config.php` to match your database settings:
```php
<?php
$host = 'localhost';
$dbname = 'study_planner';
$username = 'your_username';
$password = 'your_password';
?>
```

### Customization
- Modify `style.css` for custom styling
- Update `motivational.js` to add new quotes
- Customize quiz questions in `quiz.html`
- Adjust timer settings in `timer.html`

## 🤝 Contributing

We welcome contributions! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

### Contribution Guidelines
- Follow the existing code style
- Add comments for complex logic
- Test your changes thoroughly
- Update documentation as needed

## 🐛 Bug Reports

If you find a bug, please create an issue with:
- A clear description of the problem
- Steps to reproduce the issue
- Expected vs actual behavior
- Browser and OS information

## 📄 License

This project is licensed under the ISC License - see the [LICENSE](LICENSE) file for details.

## 👥 Authors

- **Shruti** - *Initial work* - [Shruti627](https://github.com/Shruti627)

## 🙏 Acknowledgments

- Font Awesome for icons
- Google Fonts for typography
- The open-source community for inspiration
- All contributors and users of StudyGenie AI

## 📞 Support

- **GitHub Issues**: [Report bugs or request features](https://github.com/Shruti627/AI-Based-Virtual-Study-Planner/issues)
- **Email**: For direct support inquiries
- **Documentation**: Check this README for common questions

## 🔮 Roadmap

- [ ] Mobile app development
- [ ] Advanced AI features
- [ ] Social learning features
- [ ] Integration with learning platforms
- [ ] Analytics and progress tracking
- [ ] Multi-language support

---

<div align="center">
  <p>Made with ❤️ for students worldwide</p>
  <p>⭐ Star this repository if you find it helpful!</p>
</div>
