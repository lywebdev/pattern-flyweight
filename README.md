# Flyweight Pattern Implementation in PHP

## Overview

This repository contains an example of the **Flyweight Design Pattern** implemented in PHP. The Flyweight pattern is used to minimize memory usage or computational expenses by sharing as much data as possible with similar objects.

In this example, we simulate a text rendering system where each character is represented as an object. Instead of creating a new object for every character (which can lead to high memory usage), we create an object for each **unique character** and reuse it wherever it appears.

---

## How It Works

### Key Components
1. **`Character` (Flyweight)**:
    - Represents a single unique character.
    - Implements the `CharacterInterface`.
    - Uses the `render()` method to display the character.

2. **`CharacterFactory`**:
    - Ensures that only one instance of each unique character is created.
    - Stores these instances in an internal cache (`$characters` array).

3. **`CharacterInterface`**:
    - Defines the contract for rendering a character.

4. **Main Script**:
    - Uses the `CharacterFactory` to retrieve or create character objects.
    - Builds a message by combining reusable character objects.

---

## Files in the Project

### 1. **`CharacterInterface.php`**
Defines the interface that the `Character` class implements.

### 2. **`Character.php`**
Implements the `CharacterInterface` and provides the logic to render a single character.

### 3. **`CharacterFactory.php`**
Responsible for creating and caching unique `Character` objects.

### 4. **`main.php`**
Demonstrates how to use the factory and characters to build a message. Combines all components of the Flyweight pattern.

---