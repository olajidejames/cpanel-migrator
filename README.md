 🔄 cPanel File Migrator

A simple PHP script to transfer files between cPanel servers. Perfect for migrating websites, moving backups, or transferring assets between hosting accounts.

 📋 Features

- ✅ Download files from any public URL
- ✅ Save files directly to your cPanel server
- ✅ Simple error handling
- ✅ No database required
- ✅ Works with large files (using cURL version)

## ⚙️ Installation

1. **Upload** the PHP file to your destination cPanel server
2. **Edit** the `$fileUrl` and `$savePath` variables
3. **Run** the script by accessing it via browser or command line:
   ```bash
   php download.php
   or
   www.evil.com/evil.zip
   ```

## 🔧 Requirements

- PHP 5.0 or higher
- `allow_url_fopen` enabled OR cURL installed
- Write permissions in target directory

## ⚠️ Error Handling

| Error | Possible Solution |
|-------|------------------|
| ❌ Failed to download | Check if source URL is accessible |
| ❌ Failed to save | Check write permissions on destination |
| ❌ Connection timeout | Increase timeout value in script |
| ❌ File too large | Use enhanced cURL version |

## 🔒 Security Notes

> **IMPORTANT:** Remove this script after use! It has no authentication and could be abused by others.

- Add IP restrictions if needed
- Use .htaccess to protect the script
- Delete after migration is complete

## 📝 License

MIT License - feel free to use, modify, and distribute

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Open a Pull Request

---

```
⭐ If this helped you migrate your files, give it a star!
```
