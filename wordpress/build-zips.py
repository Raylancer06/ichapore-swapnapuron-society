#!/usr/bin/env python3
"""
Packages WordPress Theme and Plugin into standard Unix/POSIX-compliant ZIP archives.
Ensures 0755 directory permissions and 0644 file permissions so Linux/Apache/cPanel 
WordPress installations can unpack style.css without permission errors.
"""
import os
import zipfile

def create_wp_zip(src_dir, zip_path, root_folder_name):
    if os.path.exists(zip_path):
        os.remove(zip_path)

    with zipfile.ZipFile(zip_path, 'w', compression=zipfile.ZIP_DEFLATED) as z:
        # Add root dir entry
        root_info = zipfile.ZipInfo(root_folder_name + '/')
        root_info.create_system = 3
        root_info.external_attr = (0o755 << 16) | (0o040000 << 16)
        z.writestr(root_info, '')

        for root, dirs, files in os.walk(src_dir):
            rel_dir = os.path.relpath(root, src_dir)
            if rel_dir == '.':
                archive_dir = root_folder_name
            else:
                archive_dir = os.path.join(root_folder_name, rel_dir).replace('\\', '/')

            for d in sorted(dirs):
                dir_path = os.path.join(archive_dir, d).replace('\\', '/') + '/'
                zinfo = zipfile.ZipInfo(dir_path)
                zinfo.create_system = 3
                zinfo.external_attr = (0o755 << 16) | (0o040000 << 16)
                z.writestr(zinfo, '')

            for f in sorted(files):
                file_full = os.path.join(root, f)
                file_rel = os.path.join(archive_dir, f).replace('\\', '/')
                with open(file_full, 'rb') as fp:
                    data = fp.read()
                zinfo = zipfile.ZipInfo(file_rel)
                zinfo.create_system = 3
                zinfo.external_attr = (0o644 << 16) | (0o100000 << 16)
                z.writestr(zinfo, data)

    print(f"Created {zip_path} ({os.path.getsize(zip_path):,} bytes)")

if __name__ == '__main__':
    base = os.path.dirname(os.path.abspath(__file__))
    theme_src = os.path.join(base, 'wp-content', 'themes', 'ichapore-swapnapuron')
    plugin_src = os.path.join(base, 'wp-content', 'plugins', 'swapnapuron-donations')
    
    create_wp_zip(theme_src, os.path.join(base, 'ichapore-swapnapuron-theme.zip'), 'ichapore-swapnapuron')
    create_wp_zip(plugin_src, os.path.join(base, 'swapnapuron-donations-plugin.zip'), 'swapnapuron-donations')
