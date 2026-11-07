# Specification: Opt-Out Governance & New Dutch Direct Client Pipeline

## 1. Executive Summary
This specification addresses two key operational requirements:
1. **Compliance & Opt-Out Management:** Implementing persistent `do_not_contact` controls within the database and outreach engine. Hoppinger (`hoppinger.com`) requested email removal via Office Manager Julia Peek. Their record is retained for compliance tracking but permanently flagged against all future outreach.
2. **New Direct Client Acquisition (Batch 2):** Resuming outreach discovery for verified Dutch commercial entities, e-commerce stores, and high-traffic platforms running WordPress, WooCommerce, and Drupal.

---

## 2. Opt-Out Architecture & Safeguards
- **Schema Extension:** Add `do_not_contact` (INTEGER DEFAULT 0), `do_not_contact_at` (TIMESTAMP), and `do_not_contact_reason` (TEXT) to the `targets` table.
- **Dispatch Defense:** 
  - `get_targets()` filters out any targets where `do_not_contact = 1` by default.
  - `dispatch_target()` aborts immediately if `do_not_contact = 1` is encountered on a target record.
- **CLI Management:** Add dedicated `optout` subcommand allowing operators to flag domains or emails with contextual notes.
- **Immediate Action on Hoppinger:**
  - Domain: `hoppinger.com`
  - Contact: Julia Peek (Office Manager)
  - Status: Retained in database with `do_not_contact = 1` and reason recorded.

---

## 3. Direct Client Pipeline (Batch 2)
- **Target Audience:** Dutch commercial businesses, e-commerce stores, online retailers, and publishers running WordPress, WooCommerce, and Drupal on PHP runtimes.
- **Technographic Verification:** Zero-cost passive technographic fingerprinter validates engine and platform before enrichment.
- **Contact Protocol:** Humanized team greetings (`Hi {Company} Team,` or verified personal names).
- **Commercial Offer:** Fixed EUR 140 emergency hotpatch package, EUR 75/hr architect rate for custom architectures, and ongoing monthly maintenance retainers.
- **Attribution:** Dynamic UTM URLs tagged with `direct_client_v1` and individual domain parameters.
