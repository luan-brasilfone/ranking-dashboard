local path = "/scripts" -- Specify the path to the folder containing the files

local function capture(command)
    local handle = io.popen(command)
    local output = handle:read("*a")
    handle:close()
    return output
end

-- List all files in the folder
local files = capture('ls ' .. path)

-- Iterate over the files
for file in string.gmatch(files, "[^\r\n]+") do
    if file:sub(-5) == ".html" then
        local newFile = file:gsub(".html$", ".blade.php") -- Rename the file
        local command = string.format("mv %s/%s %s/%s", path, file, path, newFile)
        os.execute(command) -- Execute the command to rename the file
        print("Renamed file:", file, "->", newFile)
    end
end
