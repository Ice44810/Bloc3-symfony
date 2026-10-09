-- Migration SQL for Backend_bloc3
-- Updated on 2026-03-02

-- USERS
CREATE TABLE users (
    id INT AUTO_INCREMENT NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50) DEFAULT 'user' NOT NULL,
    full_name VARCHAR(255) DEFAULT NULL,
    phone VARCHAR(20) DEFAULT NULL,
    address VARCHAR(255) DEFAULT NULL,
    postcode VARCHAR(10) DEFAULT NULL,
    ville VARCHAR(100) DEFAULT NULL,
    avatar VARCHAR(255) DEFAULT NULL,
    created_at DATETIME DEFAULT NULL,
    updated_at DATETIME DEFAULT NULL,
    UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email),
    PRIMARY KEY (id)
) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

-- CATEGORIES
CREATE TABLE categories (
    id INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    user_id INT NOT NULL,
    created_at DATETIME DEFAULT NULL,
    updated_at DATETIME DEFAULT NULL,
    INDEX idx_categories_user_id (user_id),
    PRIMARY KEY (id),
    CONSTRAINT FK_CATEGORIES_USER FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

-- TRANSACTIONS
CREATE TABLE transactions (
    id INT AUTO_INCREMENT NOT NULL,
    user_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    amount NUMERIC(10, 2) NOT NULL,
    type VARCHAR(10) NOT NULL,
    category_id INT DEFAULT NULL,
    created_at DATETIME DEFAULT NULL,
    updated_at DATETIME DEFAULT NULL,
    INDEX idx_transactions_user_id (user_id),
    INDEX idx_transactions_created_at (created_at),
    INDEX idx_transactions_type (type),
    INDEX idx_transactions_category_id (category_id),
    PRIMARY KEY (id),
    CONSTRAINT FK_TRANSACTIONS_USER FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE,
    CONSTRAINT FK_TRANSACTIONS_CATEGORY FOREIGN KEY (category_id) REFERENCES categories (id) ON DELETE SET NULL
) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

-- RECIPIENTS
CREATE TABLE recipients (
    id INT AUTO_INCREMENT NOT NULL,
    user_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    identifier VARCHAR(255) NOT NULL,
    type VARCHAR(10) NOT NULL,
    created_at DATETIME DEFAULT NULL,
    INDEX idx_recipients_user_id (user_id),
    INDEX idx_recipients_identifier (identifier),
    PRIMARY KEY (id),
    CONSTRAINT FK_RECIPIENTS_USER FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

-- CARDS
CREATE TABLE cards (
    id INT AUTO_INCREMENT NOT NULL,
    user_id INT NOT NULL,
    card_holder_name VARCHAR(255) NOT NULL,
    last4_digits VARCHAR(4) NOT NULL,
    expiry_date VARCHAR(7) NOT NULL,
    card_brand VARCHAR(50) NOT NULL,
    created_at DATETIME DEFAULT NULL,
    INDEX idx_cards_user_id (user_id),
    PRIMARY KEY (id),
    CONSTRAINT FK_CARDS_USER FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

-- MESSENGER
CREATE TABLE messenger_messages (
    id BIGINT AUTO_INCREMENT NOT NULL,
    body LONGTEXT NOT NULL,
    headers LONGTEXT NOT NULL,
    queue_name VARCHAR(190) NOT NULL,
    created_at DATETIME NOT NULL,
    available_at DATETIME NOT NULL,
    delivered_at DATETIME DEFAULT NULL,
    INDEX IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750 (queue_name, available_at, delivered_at, id),
    PRIMARY KEY (id)
) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
