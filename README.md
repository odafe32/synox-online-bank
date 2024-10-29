
# Synox Online Banking

Synox Online Banking is a secure, user-friendly online banking system built to streamline personal and business financial management. This application supports core functionalities such as deposits, withdrawals, transfers, and balance inquiries, with a focus on data security and user convenience.

## Features

- **Account Management**: Create, update, and manage multiple accounts for users.
- **Transaction Management**: Handle deposits, withdrawals, and transfers securely.
- **Balance Inquiry**: Real-time account balance calculation, including interest rates.
- **User Authentication**: Secure login and session management to protect user data.
- **Admin Dashboard**: Overview of user accounts, transactions, and system reports.
- **Interactive Reports**: Display and export transaction history and balance summaries.
- **Responsive UI**: User-friendly interface optimized for both desktop and mobile use.

## Technology Stack

- **Frontend**: HTML, CSS, JavaScript (optional libraries: Bootstrap, jQuery, etc.)
- **Backend**: PHP (with MySQL database)
- **Database**: MySQL, with tables for users, transactions, and account details.
- **Security**: Session management, prepared statements, and input validation to prevent SQL injection and ensure data integrity.

## Getting Started

### Prerequisites

1. **PHP**: Ensure PHP is installed (version 7.4+ recommended).
2. **MySQL**: Install MySQL Server.
3. **Composer**: For managing dependencies (if applicable).
4. **XAMPP**: A local server environment for development.

### Installation

1. **Clone the Repository**:

   ```bash
   git clone https://github.com/yourusername/synox-online-banking.git
   cd synox-online-banking
   ```

2. **Set Up Database**:
   - Import the database schema provided in `database/schema.sql`.
   - Configure database connection settings in `config.php`.

3. **Run Application**:
   - Launch your local server and open the project folder in a browser.
   - Go to `http://localhost/synox-online-banking`.

### Configuration

- **Database**: Update `config.php` with your MySQL database credentials.
- **Session Security**: Adjust session settings in `php.ini` for production environments.

### Directory Structure

```plaintext
├── client/               # Client-side application files
├── conf/                 # Configuration files (config.php, checklogin.php)
├── dist/                 # Assets, partials, and front-end libraries
├── plugins/              # Plugins (e.g., DataTables, jQuery)
├── README.md             # Project documentation
├── database/             # Database schema and initial data scripts
├── pages_dashboard.php   # Admin dashboard
├── pages_balance_enquiries.php   # Balance enquiry page
└── ...
```

## Usage

1. **User Login**: Access the system with your credentials.
2. **Account Management**: View balances, manage transactions, and review statements.
3. **Admin Access**: Monitor overall activity, manage user accounts, and generate reports.

## Contributing

1. **Fork the repository**
2. **Create a branch** for any new feature or bug fix.
3. **Submit a pull request** with a clear description of changes made.

