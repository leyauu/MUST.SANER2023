const xlsx = require('node-xlsx').default
const sheet = xlsx.parse('./commiteeMembers.xlsx')
const fs = require('fs')
const data = sheet[0].data
const json = {}
for (let i in data) {
    if (i == 0) continue
    const key = data[i][10]
    if (!json[key]) json[key] = []
    const obj = {
        name: `${data[i][2] || ''} ${data[i][3] || ''}`,
        affiliation: `${data[i][6] || ''}`,
        nation: `${data[i][5] || ''}`,
        website: `${data[i][7] || ''}`,
        img: `${data[i][11] || ''}`,
        email: `${data[i][4] || ''}`,
        role: `${data[i][8] || ''}`
    }
    if (obj.name === 'Tao Zhang') continue
    if (data[i][8] === 'track chair') json[key].unshift(obj)
    else json[key].push(obj)
}
console.log(json)

// write to json file
fs.writeFileSync('./commiteeMembers.json', JSON.stringify(json))
