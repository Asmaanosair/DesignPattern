# Design Patterns Used

## Strategy Pattern
- Used when you have **multiple interchangeable behaviors** (e.g., different payment methods).
- Allows switching between behaviors **easily at runtime without using if conditions**.
- Each behavior is implemented as a **separate class** that follows a common interface.

---

## Factory Pattern
- Used to **create object instances** based on input without using if/else statements or knowing the exact class details.
- The factory centralizes object creation logic.
- Makes the system **cleaner, scalable, and easier to maintain**.

---

## Adapter Pattern
- Used when integrating **existing code with new code** that has a different interface.
- The adapter acts as a **bridge**, allowing incompatible interfaces to work together.
- Achieves integration **without modifying the original code**.

---

## Decorator Pattern
- Used to add **new functionality dynamically** (e.g., logging, validation, notifications).
- Works by **wrapping the original object** with another object that extends its behavior.
- Avoids modifying the existing class structure while enhancing features.

---

## Facade Pattern
- Used to simplify interaction with a **complex system**.
- Provides a **unified and simple interface** to multiple subsystems.
- Example: Instead of calling multiple services for a payment, you just call `PaymentFacade::pay()`.
- Makes the code **easier to use and maintain**.

---

## Observer Pattern
- Used when an **event occurs** and multiple independent actions should be triggered automatically.
- Example after a payment:
    - Send a notification,
    - Trigger a webhook,
    - Log the transaction.
- Observers **listen for events** and react independently.
- Makes the system **loosely coupled, flexible, and extendable**.  
