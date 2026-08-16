# Lead Software Architect | Wallety | 2009

## Executive Summary & Architectural Context
Wallety addressed national banking and payment infrastructure constraints in Egypt, establishing the region's first comprehensive secure online payment gateway. The platform was engineered to solve systemic challenges concerning online transaction security, credit card fraud mitigation, and high availability under unstable local telecommunications infrastructure. Post-funding, the architecture successfully scaled to process 33% of all domestic air travel ticketing throughput across Egypt.

---

## Infrastructure & Systems Topology

```
+-----------------------------------------------------------------------------------+
|                                  AWS ECOSYSTEM                                    |
|                                                                                   |
|  +-------------------+        +-------------------+        +-------------------+  |
|  | Enterprise Load   | -----> |   Symfony (PHP)   | -----> | Asynchronous CLI  |  |
|  |    Balancer       |        |   App Instances   |        |   Queue Daemons   |  |
|  +-------------------+        +-------------------+        +-------------------+  |
|                                         |                            |            |
|                                         v                            v            |
|                               +-------------------+        +-------------------+  |
|                               |   MySQL Master    | -----> |   MySQL Slaves    |  |
|                               |     (Writes)      | (Repl) |      (Reads)      |  |
|                               +-------------------+        +-------------------+  |
+-----------------------------------------|-----------------------------------------+
                                          v
                   +-----------------------------------------------+
                   | Amadeus GDS & Banking Partner Gateway Network |
                   +-----------------------------------------------+
```

### 1. High-Availability Compute & Load Balancing Layer
* **Ingress & Traffic Distribution**: AWS Cloud ecosystem utilizing Enterprise Load Balancers to terminate SSL and distribute incoming HTTPS traffic across stateless application nodes.
* **Domain Framework**: Developed on Symfony Framework (PHP), enforcing domain-driven isolation, strict object-oriented paradigms, and clean service layers for core payment workflows.

### 2. Database Schema & Data Layer Replication
* **Master-Slave Topology**: Clustered MySQL architecture separating write and read workloads:
  * **Master Node**: Dedicated exclusively to ACID-compliant transactional state mutations and write operations.
  * **Slave Nodes**: Serviced read-heavy queries, transaction logging, and real-time audit reporting.
* **I/O Overhead Reduction**: Substantially minimized disk I/O bottlenecks on the master node, maintaining high-throughput execution during peak demand periods.

### 3. Asynchronous Processing & Queue Architecture
* **Non-Blocking Execution**: Decoupled synchronous HTTP request/response handling from long-running payment settlement tasks via CLI daemons.
* **Queue Loop Frequency**: Engineered 1-second asynchronous queue execution loops to ingest and process transaction bursts without locking web-tier thread pools.

---

## Technical Stack

| Layer | Component / Specification |
| :--- | :--- |
| **Language & Framework** | PHP, Symfony Framework |
| **Cloud Infrastructure** | AWS Ecosystem, Load Balancers |
| **Database & Storage** | MySQL (Master-Slave Replication), Asynchronous Queues, CLI Daemons |
| **API Integrations** | Amadeus Global Distribution System (GDS) API, External Bank Gateways |

---

## Core Engineering Implementations & Edge Case Mitigation

### 1. Defensive Transactional State Machine
* **Constraint**: Frequent external bank gateway timeouts and volatile local network dropouts risked inconsistent states, unconfirmed bookings, or lost callbacks.
* **Engineered Solution**: Implemented a deterministic transactional state machine (`PENDING`, `AUTHORIZED`, `SETTLED`, `FAILED`, `RECONCILED`).
* **Resilience**: Integrated automatic status reconciliation and polling routines, guaranteeing strict SLA compliance and zero transaction leakage during third-party service degradation.

### 2. Real-Time Amadeus GDS Synchronization
* **Integration Logic**: Connected the core payment routing engine directly to the Amadeus Global Distribution System (GDS) for instantaneous flight seat allocation.
* **Concurrency Management**: Enforced atomic database transactions aligning seat lock operations with payment gateway authorization confirmations, eliminating double-booking under extreme traffic spikes.

---

## Quantifiable Engineering & Business Impact

* **National Scale**: Scaled system throughput to capture **33% of all domestic air travel ticketing volume** across Egypt.
* **Autonomous Delivery**: Single-handedly architected, implemented, and deployed the core payment engine to achieve initial production launch and secure institutional funding.
* **Queue Latency**: Maintained 1-second queue processing intervals during severe transaction spikes, insulating end users from gateway latency.
* **High Availability**: Optimized master-slave database replication to eliminate I/O disk contention, sustaining continuous service uptime despite national market telecom restrictions.
